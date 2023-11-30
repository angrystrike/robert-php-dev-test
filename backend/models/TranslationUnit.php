<?php

namespace models;

use PDOException;
use PDO;

require_once 'Model.php';


class TranslationUnit extends Model
{
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

    public function list()
    {
        $stmt = $this->db->query("SELECT * FROM translation_units");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return json_encode($result);
    }
}