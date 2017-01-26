<?php

namespace Convenia\Dominio\Payslip\Parsers;

use Convenia\Dominio\Payslip\Entities\Maps\EventMap;
use Convenia\Dominio\Payslip\Interfaces\ParserInterface;

/**
 * Class Csv.
 */
class Csv implements ParserInterface
{
    /**
     * @param $filePath
     * @return array
     */
    public function format($filePath)
    {
        return array_map(function ($value) {
            return $this->parseCsvLine($value, "\t");
        }, file($filePath));
    }

    /**
     * @param $value
     * @param $delimiter
     * @return array
     */
    protected function parseCsvLine($value, $delimiter)
    {
        return $this->pluckMappedFields(str_getcsv($value, $delimiter));
    }

    /**
     * @param array $originalFields
     * @return array
     */
    protected function pluckMappedFields(array $originalFields)
    {
        $translatedFields = [];

        $mappedFields = EventMap::FIELDS_MAP;
        $mappedTypes = EventMap::FIELDS_TYPES;
        $filteredFields = array_intersect_key($originalFields, $mappedFields);

        foreach ($filteredFields as $key => $filteredField) {
            $fieldValue = $filteredField;

            if (mb_detect_encoding($fieldValue, 'UTF-8', true) === false) {
                $fieldValue = utf8_encode($filteredField);
            }
            
            if (isset($mappedTypes[$mappedFields[$key]])) {
                $fieldValue = $this->convertField(
                    $mappedTypes[$mappedFields[$key]],
                    $filteredField
                );
            }

            $translatedFields[$mappedFields[$key]] = $fieldValue;
        }

        ksort($translatedFields);

        return array_map('trim', $translatedFields);
    }

    /**
     * @param array $data
     * @return array
     */
    protected function removeEmptySlots(array $values)
    {
        $filteredValues = array_filter($values, function ($value) {
            return ! ($value === '' || $value === null);
        });

        return array_values($filteredValues);
    }

    /**
     * @param $format
     * @param $value
     * @return int
     */
    protected function convertField($format, $value)
    {
        switch ($format) {
            case 'money':
                if (strpos($value, ',') !== false) {
                    return (float) str_replace(',', '.', $value);
                }
        }

        return $value;
    }
}
