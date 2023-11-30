<?php

namespace api;

use Bramus\Router\Router;
use models\TranslationUnit;


$router->get('/translations/{id}', function ($id) {
    $unit = new TranslationUnit();
    echo $unit->get($id);
});

$router->delete('/translations/{id}', function ($id) {
    $unit = new TranslationUnit();
    echo $unit->delete($id);
});

$router->get('/translations', function () {
    $unit = new TranslationUnit();
    echo $unit->list();
});

$router->post('/translations', function () {
    $data = file_get_contents("php://input");
    $data = json_decode($data, true);

    $unit = new TranslationUnit();
    $id = isset($data['id']) ? $data['id'] : null;

    echo $unit->save($data, $id);
});