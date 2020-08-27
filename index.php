<?php


require_once "vendor/autoload.php";


use CliColorize\Background;
use CliColorize\Cli;

$cli = new Cli();


echo $cli->red('hello', Background::BLACK);
echo $cli->blue("world", Background::YELLOW);
echo $cli->purple("world", Background::YELLOW);
