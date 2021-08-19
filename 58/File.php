<?php

class File implements iFile
{
    /**
     * @var string
     */
    private string $filePath;

    /**
     * @var array dirname, basename, extension (optional), filename
     */
    private $pathParts = [];

    /**
     * @param string $filePath
     */
    public function __construct($filePath)
    {
        if (!$this->isFilePathValid($filePath)) {
            die('Invalid file path');
        }

        $this->filePath = $filePath;

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
        return $this->pathParts['extension'] ?? '';
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
        return rename($this->filePath, $newName);
    }

    /**
     * @param string $newPath
     */
    public function replace($newPath)
    {
        $this->rename($newPath);
    }

    /**
     * @param string $filePath
     * @return bool
     */
    private function isFilePathValid(string $filePath): bool
    {
        return file_exists($filePath);
    }

    private function resolvePathParts()
    {
        $this->pathParts = pathinfo($this->filePath);
    }
}