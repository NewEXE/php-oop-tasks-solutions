<?php

/*
 * Задача 58.1
 * Реализуйте описанный класс в соответствии с интерфейсом. Проверьте работу вашего класса.
 */

require_once 'iFile.php';

class File implements iFile
{
    /**
     * @var string
     */
    private string $filePath;

    /**
     * @var array {
     *     An associative array of file path parts (pathinfo() result).
     *     @see pathinfo()
     *
     *     @type string[] {
     *         @type string $dirname
     *         @type string $basename
     *         @type string $extension
     *         @type string $filename
     *     }
     * }
     */
    private array $pathParts;

    /**
     * @param string $filePath Absolute or relative path to file.
     */
    public function __construct($filePath)
    {
        $this->setFilePath($filePath);
        $this->resolvePathParts();
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->filePath;
    }

    /**
     * @return string
     */
    public function getDir()
    {
        return $this->pathParts['dirname'];
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->pathParts['filename'];
    }

    /**
     * @return string
     */
    public function getExt()
    {
        return $this->pathParts['extension'];
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return filesize($this->filePath);
    }

    /**
     * @return string
     */
    public function getText()
    {
        return file_get_contents($this->filePath);
    }

    /**
     * @param string $text
     * @return int
     */
    public function setText($text)
    {
        return file_put_contents($this->filePath, $text);
    }

    /**
     * @param string $text
     * @return int
     */
    public function appendText($text)
    {
        return file_put_contents($this->filePath, $text, FILE_APPEND);
    }

    /**
     * @param string $copyPath
     * @return bool
     */
    public function copy($copyPath)
    {
        return copy($this->filePath, $copyPath);
    }

    /**
     * @return bool
     */
    public function delete()
    {
        return unlink($this->filePath);
    }

    /**
     * @param string $newName
     * @return bool
     */
    public function rename($newName)
    {
        return rename($this->filePath, $this->getDir() . DIRECTORY_SEPARATOR . $newName);
    }

    /**
     * @param string $newPath
     * @return bool
     */
    public function replace($newPath)
    {
        return rename($this->filePath, $newPath);
    }

    /**
     * @param string $filePath
     * @return bool
     */
    private function isFilePathValid(string $filePath): bool
    {
        return file_exists($filePath);
    }

    /**
     * @param string $filePath
     */
    private function setFilePath(string $filePath)
    {
        if (!$this->isFilePathValid($filePath)) {
            die('Invalid file path');
        }

        $this->filePath = realpath($filePath);
    }

    private function resolvePathParts()
    {
        $this->pathParts = pathinfo($this->filePath);

        if (!isset($this->pathParts['extension'])) {
            $this->pathParts['extension'] = '';
        }
    }
}