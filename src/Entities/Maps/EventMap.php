<?php

namespace Convenia\Dominio\Payslip\Entities\Maps;

/**
 * Class EventMap.
 */
class EventMap
{
    /**
     * CSV fields map.
     */
    const FIELDS_MAP = [
        1 => 'company_code',
        5 => 'company_name',
        6 => 'company_reg',
        2 => 'employee_code',
        3 => 'employee_name',
        8 => 'role',
        10 => 'cost_center',
        20 => 'admission_date',
        23 => 'rubrik_code',
        21 => 'rubrik_name',
        24 => 'reference',
        26 => 'event_type',
        25 => 'event_value',
    ];
}
