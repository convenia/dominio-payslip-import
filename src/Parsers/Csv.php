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
        return array_map(function ($v) {
            return $this->parseCsvLine($v, "\t");
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
        $mappedFields = EventMap::FIELDS_MAP;
        $filteredFields = array_intersect_key($this->removeEmptySlots($originalFields), $mappedFields);

        foreach ($filteredFields as $key => $filteredField) {
            $translatedFields[$mappedFields[$key]] = $filteredField;
        }

        return array_map('trim', $translatedFields);
    }

    /**
     * @param array $data
     * @return array
     */
    protected function removeEmptySlots(array $data)
    {
        $filteredValues = array_filter($data, function ($v) {
            if ($v == '' || $v == null) {
                return false;
            }

            return true;
        });

        return array_values($filteredValues);
    }
}
