<?php

use Symfony\Component\Dotenv\Dotenv;

require dirname(__DIR__).'/vendor/autoload.php';

if (!class_exists(Dotenv::class)) {
    throw new RuntimeException('The Symfony Dotenv component is not installed.');
}

(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');
