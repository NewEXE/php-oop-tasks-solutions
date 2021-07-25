<?php
/*
 * Scan all files and dirs with solutions
 * and render links to the file viewer and downloader.
 */

$files = scandir('.');

$files = array_filter($files, static function (string $file) {
    // Skip self and parent dirs and hidden files
    if (str_starts_with($file, '.')) {
        return false;
    }

    // Allow only files like 1.php, 42.php etc.
    // and directories.
   return preg_match('/^\d+.php$/', $file) || is_dir($file);
});

/**
 * @var array
 *
 * Key is filepath
 * Value is page data (from first file comment)
 * - page link
 * - page description
 * - is dir or not
 */
$pages = [];

foreach ($files as $file) {
    $isDir = is_dir($file);

    $phpCommentContent = '';
    if (!$isDir) {
        $phpCommentContent = getFirstPhpCommentContent($file);
    }
    $phpCommentContentAsArray = explode(PHP_EOL, $phpCommentContent);

    $page = [
        'description' => '',
        'link' => '',
        'isDir' => false,
    ];

    foreach ($phpCommentContentAsArray as $commentLine) {
        if (str_starts_with($commentLine, 'http')) {
            $page['link'] = $commentLine;
        } else {
            $page['description'] .= ($commentLine . PHP_EOL);
        }
    }
    $page['description'] = trim($page['description']);
    $page['description'] = nl2br($page['description']);
    $page['isDir'] = $isDir;

    $pages[$file] = $page;
}

foreach ($pages as $filePath => $page) {
    if (!empty($page['link'])) {
        echo sprintf('<a href="%1$s">%1$s</a><br />', $page['link']);
    }

    if (!empty($page['description'])) {
        echo sprintf('%s:<br />', $page['description']);
    }

    if ($page['isDir']) {
        echo sprintf('%1$s (директория) [<a href="%1$s">перейти</a>]<br />', $filePath);
    } else {
        echo sprintf('%1$s [<a href="view-file.php?file=%1$s">просмотреть</a>, <a href="%1$s">запустить</a>, <a href="download-file.php?file=%1$s">скачать</a>]<br />', $filePath);
    }
    echo '========== <br />';
}

/**
 * @param string $filePath
 * @return string
 */
function getFirstPhpCommentContent(string $filePath): string
{
    $handle = @fopen($filePath, 'rb');

    if (!$handle) {
        return '';
    }

    $phpComment = '';
    while (($codeLine = fgets($handle)) !== false) {
        $codeLine = trim($codeLine);

        if (str_starts_with($codeLine, '*/')) {
            break;
        }

        if (!str_starts_with($codeLine, '/*') && !str_starts_with($codeLine, '*')) {
            continue;
        }

        $codeLine = strReplaceFromStart($codeLine, ['/*', '*']);
        $codeLine = trim($codeLine);

        $phpComment .= $codeLine;
        $phpComment .= PHP_EOL;
    }

    fclose($handle);

    return trim($phpComment);
}

/**
 * @param string $haystack
 * @param string|string[] $needles
 * @return string
 */
function strReplaceFromStart(string $haystack, string|array $needles): string
{
    $return = $haystack;

    foreach ((array)$needles as $needle) {
        $return = preg_replace('/^' . preg_quote($needle, '/') . '/', '', $return);
    }

    return $return;
}