<?php declare(strict_types=1);

require_once 'File.php';

$file = new File('numbers.txt');
$current = $file->getContents();
$number = rand(1, 1000);

$current .= PHP_EOL . $number;

$numArr = explode(PHP_EOL, $current);

$file->putContents($current);
echo 'Random Number Generated: ' . $number . PHP_EOL;
echo 'Average of Numbers: ' . number_format(array_sum($numArr)/count($numArr), 2) . PHP_EOL;