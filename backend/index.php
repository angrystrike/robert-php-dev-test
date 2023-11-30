<?php

require_once './models/TranslationUnit.php';
require __DIR__ . '/vendor/autoload.php';

$router = new \Bramus\Router\Router();
header('Content-Type: application/json');

require __DIR__ . '/api/translations.php';

$router->run();

$unit = new TranslationUnit();
$unit->save();

print_r($test);