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
        8 => 'company_name',
        9 => 'company_reg',
        16 => 'company_department',
        17 => 'company_branch',
        2 => 'employee_code',
        3 => 'employee_name',
        11 => 'role',
        13 => 'cost_center',
        19 => 'admission_date',
        22 => 'rubrik_code',
        20 => 'rubrik_name',
        23 => 'reference',
        25 => 'event_type',
        24 => 'event_value',
        29 => 'salary',
        30 => 'base_inss',
        31 => 'base_irrf',
        35 => 'level_irrf',
        33 => 'base_fgts',
        34 => 'month_fgts',
    ];
}
