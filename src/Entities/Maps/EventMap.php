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
        'paystub_subsidiary',
        'paystub_code',
        'employee_code',
        'employee_name',
        '_1',
        '_cc',
        '_cc_digit',
        '_2',
        'paystub_company',
        'paystub_cnpj',
        '_3',
        'employee_job_description',
        'employee_cbo',
        'employee_cost_center',
        '_4',
        '_5',
        '_6',
        'employee_department',
        'employee_subsidiary',
        'employee_admission_date',
        'event_name',
        '_8',
        'event_code',
        'event_reference_value',
        'event_value',
        'event_type',
        '_9',
        '_10',
        '_11',
        'employee_salary',
        'employee_inss_salary',
        'employee_irrf_base',
        'employee_base_fgts',
        'employee_fgts_value',
        'employee_irrf',
        '_12',
        '_13',
        '_comment_1',
        '_14',
        '_15',
        'paystub_reference_date',
        '_17',
        '_18',
        '_19',
        '_20',
        '_21',
        '_22',
        '_23',
        '_24',
        '_25',
        '_26',
        '_27',
        '_28',
        '_29',
        '_30',
        '_31',
        '_32',

    ];

    /**
     *
     */
    const FIELDS_TYPES = [
        'base_fgts' => 'money',
        'base_inss' => 'money',
        'base_irrf' => 'money',
        'event_value' => 'money',
        'reference' => 'money',
        'level_irrf' => 'money',
        'month_fgts' => 'money',
        'salary' => 'money',
    ];
}
