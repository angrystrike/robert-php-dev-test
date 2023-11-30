<?php

namespace models;

use PDOException;

require_once 'Model.php';


class TranslationUnit extends Model
{
    // private $servername = "localhost";
    // private $username = "robert";
    // private $password = "Qwerty_123";
    // private $dbname = "robert";
    // private $id_to_retrieve = 1;

    public function save()
    {
        try {
            $id = 1;
        
            $stmt = $this->db->prepare("SELECT * FROM translation_units WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
            if ($result) {
                print_r($result);
            } else {
                echo "No records found with the given ID.";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // public function get($id) 
    // {
    //     ret
    // }

    public function list()
    {
        $data = [
            'message' => 'Hello, this is a JSON response!',
            'status' => 'success'
        ];
        
        return json_encode($data);
    }
}