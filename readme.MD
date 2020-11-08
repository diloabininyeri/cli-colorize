## Cli colorize 

install
```
composer require zeus/cli-color
```



>using
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

### screenshot 

![using](https://i.ibb.co/7N8sGf9/Screenshot-from-2020-08-28-00-00-54.png)
