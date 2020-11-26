## Cli Colorize 

**Install**

```bash
composer require zeus/cli-color
```

**Using example**

```php
<?php


require_once "vendor/autoload.php";


use CliColorize\Background;
use CliColorize\Cli;

$cli = new Cli();


echo $cli->red('hello', Background::BLACK);
echo $cli->blue("world", Background::YELLOW);
echo $cli->purple("world", Background::YELLOW);

```



### Available colors

| Text (Method name) | Background (Constants)   |
| ------------------ | ------------------------ |
| black              | `Background::RED`        |
| dark_gray          | `Background::BLACK`      |
| green              | `Background::GREEN`      |
| light_green        | `Background::YELLOW`     |
| red                | `Background::BLUE`       |
| light_red          | `Background::MAGENTA`    |
| blue               | `Background::CYAN`       |
| light_blue         | `Background::LIGHT_GRAY` |
| cyan               |                          |
| light_cyan         |                          |
| light_purple       |                          |
| brown              |                          |
| white              |                          |
| purple             |                          |
| magenta            |                          |
| light_magenta      |                          |



### Screenshot 

![using](https://i.ibb.co/7N8sGf9/Screenshot-from-2020-08-28-00-00-54.png)

![Text colors examples](https://i.ibb.co/P1x4s8J/cli-text-colors.png>)

![Background colors example](https://i.ibb.co/JzTrrLc/cli-background-colors.png)