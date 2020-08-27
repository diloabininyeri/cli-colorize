<?php


require_once "vendor/autoload.php";


use CliColorize\Background;
use CliColorize\Cli;

$cli = new Cli();

$hello = str_pad('hello', 50, ' ', STR_PAD_BOTH);
$world = str_pad('worlld', 50, ' ', STR_PAD_BOTH);
$lorem = str_pad('lorem_upsom', 50, ' ', STR_PAD_BOTH);


echo $cli->red($hello, Background::BLACK) . PHP_EOL;
echo $cli->blue($world, Background::YELLOW) . PHP_EOL;
echo $cli->cyan($lorem, Background::RED) . PHP_EOL;
echo $cli->purple(' without background color') . PHP_EOL;
