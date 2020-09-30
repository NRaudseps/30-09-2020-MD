<?php declare(strict_types=1);

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

$file = new File('numbers.txt');
$current = $file->getContents();
$number = rand(1, 1000);

$current .= PHP_EOL . $number;

$numArr = explode(PHP_EOL, $current);

$file->putContents($current);
echo 'Random Number Generated: ' . $number . PHP_EOL;
echo 'Average of Numbers: ' . number_format(array_sum($numArr)/count($numArr), 2) . PHP_EOL;