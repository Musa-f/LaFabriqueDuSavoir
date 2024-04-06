<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

try {
    $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();
} catch (Exception $e) {
    echo 'Erreur Dotenv: ',  $e->getMessage(), "\n";
    exit;
}