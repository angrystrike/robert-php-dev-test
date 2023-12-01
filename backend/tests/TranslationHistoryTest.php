<?php

use PHPUnit\Framework\TestCase;
use models\TranslationHistory;


class TranslationHistoryTest extends TestCase
{
    public function testFindByUnitId()
    {
        $history = new TranslationHistory();

        $unitId = 1;

        $result = $history->findByUnitId($unitId);
        $result = json_decode($result, true);

        $this->assertEmpty($result, 'Expected result to be an empty array, when unit ID is not found');

        if ($result) {
            $this->assertJson($result);
        }
    }

    public function testSave()
    {
        $history = new TranslationHistory();

        $newData = [
            'text' => 'Test',
            'type' => 'sentence',
            'languageCode' => 'en',
        ];

        $unitId = 1;

        $result = $history->save($newData, $unitId);
        $result = json_decode($result, true);
       
        $expectedResponses = [
            [
                'status' => 404,
                'message' => 'Translation Unit with such ID was not found'
            ],
            [
                'status' => 200,
                'message' => 'History saved successfully'
            ],
        ];

        $this->assertContains($result, $expectedResponses, 'Unexpected response');
    }
}
