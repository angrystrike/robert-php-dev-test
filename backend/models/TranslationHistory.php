<?php

namespace models;

use PDO;


class TranslationHistory extends Model
{
    public function save($newData, $id)
    {
        $newData = [
            'unit_text' => $newData['text'],
            'unit_type' => $newData['type'],
            'lang_code' => $newData['languageCode']
        ];

        $labels = [
            'unit_text' => 'Text',
            'unit_type' => 'Type',
            'lang_code' => 'Language'
        ];
        
        $stmt = $this->db->prepare("SELECT * FROM translation_units WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        foreach($newData as $key => $value) {
            if ($newData[$key] !== $result[$key]) {
                $sql = 
                    "INSERT INTO unit_history (unit_id, old_value, new_value, message, created_at) 
                    VALUES (:unit_id, :old_value, :new_value, :message, CURRENT_TIMESTAMP)";
                $stmt = $this->db->prepare($sql);

                $stmt->bindParam(':unit_id', $id);
                $stmt->bindParam(':old_value', $result[$key]);
                $stmt->bindParam(':new_value', $newData[$key]);
                $message = "Translation Unit #{$id} property {$labels[$key]} was changed from {$result[$key]} to {$newData[$key]}";
                $stmt->bindParam(':message', $message);
                $stmt->execute();
            }
        }
        
    }

    public function findByUnitId($unitId)
    {
        $stmt = $this->db->prepare("SELECT * FROM unit_history WHERE unit_id = :id");
        $stmt->bindParam(':id', $unitId, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($result);
    }
}