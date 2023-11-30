<?php

namespace models;

use PDO;

class Model {

    public function __construct()
    {
        $this->db = self::getConnection();
    }

    public static function getConnection()
    {
        $params = include('config.php');

        $connectionString = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($connectionString, $params['username'], $params['password']);
        
        return $db;
    }

}