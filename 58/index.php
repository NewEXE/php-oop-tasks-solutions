<?php

/*
 * Класс File в ООП на PHP.
 * http://code.mu/ru/php/book/oop/class/File/
 */

require_once 'File.php';

$filePath = 'test.txt';
$file = new File($filePath);

$file->setText('Hello world');
echoLn("Текст 'Hello world' записан в файл $filePath");

$file->appendText('!');
echoLn("Текст '!' добавлен в файл $filePath");

$newName = 'test2.txt';
$file->rename($newName);
echoLn("Файл $filePath переименован в $newName");

function echoLn(string $text) {
    echo $text . '<br />';
}