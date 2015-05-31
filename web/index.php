<?php

if (!file_exists($autoload = __DIR__ . "/../vendor/autoload.php")) {
    throw new RuntimeException('Dependencies are not installed!');
}
require $autoload;

$router = new \Respect\Rest\Router();
$router->any('/ninja/*', new \Restfull\Controller\Ninja());

unset($autoload);