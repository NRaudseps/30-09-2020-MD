<?php


class File
{
    private string $file;

    public function __construct(string $file)
    {
        $this->file = $file;
    }

    public function getContents(): string
    {
        return file_get_contents($this->file);
    }

    public function putContents(string $current)
    {
        file_put_contents($this->file, $current);
    }
}