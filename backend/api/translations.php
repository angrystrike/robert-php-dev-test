<?php

namespace api;

use Bramus\Router\Router;
use Models\TranslationUnit;
// require_once __DIR__ . '/../models/TranslationUnit.php';


$router->get('/translations', function () {
    $unit = new TranslationUnit();
    echo $unit->list();
});