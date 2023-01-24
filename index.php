<?php
require_once __DIR__.'/vendor/autoload.php';

use DI\ContainerBuilder;
use User\User;

$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions(__DIR__.'/config.php');

$container = $containerBuilder->build();

$user = $container->get(User::class);

?>