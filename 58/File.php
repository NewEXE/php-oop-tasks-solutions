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
     * @var bool
     */
    private bool $isDeleted = false;

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
        if ($this->isDeleted) {
            return 0;
        }

        return filesize($this->filePath);
    }

    /**
     * @return string
     */
    public function getText()
    {
        if ($this->isDeleted) {
            return '';
        }

        return file_get_contents($this->filePath);
    }

    /**
     * @param string $text
     * @return int
     */
    public function setText($text)
    {
        $bytesWritten = file_put_contents($this->filePath, $text);

        if ($bytesWritten > 0) {
            $this->isDeleted = false;
        }

        return $bytesWritten;
    }

    /**
     * @param string $text
     * @return int
     */
    public function appendText($text)
    {
        $bytesWritten = file_put_contents($this->filePath, $text, FILE_APPEND);

        if ($bytesWritten > 0) {
            $this->isDeleted = false;
        }

        return $bytesWritten;
    }

    /**
     * @param string $copyPath
     * @return bool
     */
    public function copy($copyPath)
    {
        if ($this->isDeleted) {
            return false;
        }

        return copy($this->filePath, $copyPath);
    }

    /**
     * @return bool
     */
    public function delete()
    {
        if ($this->isDeleted) {
            return true;
        }

        $isDeleted = unlink($this->filePath);

        if ($isDeleted) {
            $this->isDeleted = true;
        }

        return $isDeleted;
    }

    /**
     * @param string $newName
     * @return bool
     */
    public function rename($newName)
    {
        $newPath = $this->getDir() . DIRECTORY_SEPARATOR . $newName;

        return $this->replace($newPath);
    }

    /**
     * @param string $newPath
     * @return bool
     */
    public function replace($newPath)
    {
        if ($this->isDeleted) {
            return false;
        }

        $isRenamed = rename($this->filePath, $newPath);

        if ($isRenamed) {
            $this->setFilePath($newPath);
        }

        return $isRenamed;
    }

    /**
     * @param string $filePath
     */
    private function setFilePath(string $filePath)
    {
        if (!file_exists($filePath)) {
            die("File not exists by path $filePath");
        }

        $this->filePath = realpath($filePath);

        $this->resolvePathParts();
    }

    private function resolvePathParts()
    {
        $this->pathParts = pathinfo($this->filePath);

        if (!isset($this->pathParts['extension'])) {
            $this->pathParts['extension'] = '';
        }
    }
}