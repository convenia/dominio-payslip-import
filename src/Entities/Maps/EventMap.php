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
        2 => 'employee_code',
        3 => 'employee_name',
        5 => 'event_type',
        9 => 'role',
        23 => 'description',
    ];
}
