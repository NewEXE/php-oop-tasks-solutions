<?php
echo '<pre>';

$fileName = filter_input(INPUT_GET, 'file', FILTER_SANITIZE_STRING);
$fileName = trim($fileName);

if (empty($fileName)) {
    stopExecution('Please pass "file" param with filename for opening. Ex: [...]/view-file.php?file=5.php');
}

if (!file_exists($fileName) || !is_file($fileName)) {
    stopExecution("File $fileName not exists");
}

$fn = @fopen($fileName, 'rb');

if (empty($fn)) {
    stopExecution('Can not open file ' . $fileName);
}

while(!feof($fn))  {
    $line = fgets($fn);
    $line = htmlspecialchars($line);
    echo $line;
}

fclose($fn);

echo '</pre>';

function stopExecution(string $msg = '')
{
    if ($msg !== '') {
        echo $msg . PHP_EOL;
    }

    die(0);
}