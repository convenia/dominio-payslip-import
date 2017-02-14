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
        'employee_department',
        '_6',
        'employee_subsidiary',
        'employee_admission_date',
        'event_name',
        '_7',
        'event_code',
        'event_reference_value',
        'event_value',
        'event_type',
        '_9',
        '_10',
        '_50',
        'employee_salary',
        'employee_inss_salary',
        'employee_irrf_base',
        '_11',
        'employee_base_fgts',
        'employee_fgts_value',
        'employee_irrf',
        '_12',
        '_13',
        '_comment_1',
        '_14',
        '_15',
        '_24',
        'employee_birth_date',
        '_18',
        '_19',
        '_20',
        '_21',
        '_22',
        '_23',
        '_63',
        'paystub_reference_date',
        '_25',
        '_26',
        '_27',
        '_28',
        '_29',
        '_30',
        '_31'

    ];

    /**
     *
     */
    const FIELDS_TYPES = [
        'employee_salary' => 'money',
        'employee_inss_salary' => 'money',
        'employee_irrf_base' => 'money',
        'employee_base_fgts' => 'money',
        'employee_fgts_value' => 'money',
        'employee_irrf' => 'money',
        'month_fgts' => 'money',
        'employee_birth_date' => 'date',
        'employee_admission_date' => 'date',
        'paystub_reference_date' => 'date',
    ];
}
