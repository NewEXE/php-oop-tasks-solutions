<?php
$fileName = filter_input(INPUT_GET, 'file', FILTER_SANITIZE_STRING);
$fileName = trim($fileName);

if (empty($fileName)) {
    die('Please pass "file" param with filename for opening. Ex: [...]/download-file.php?file=5.php');
}

if (!file_exists($fileName) || !is_file($fileName)) {
    die('File not exists');
}

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($fileName) . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($fileName));
readfile($fileName);