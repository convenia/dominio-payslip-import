<?php

namespace Convenia\Dominio\Payslip;

class Orm
{
    protected $rawData;

    protected $payslip;

    public function __construct(Payslip $payslip)
    {
        $this->payslip = $payslip;
        $this->rawData = $this->payslip->getEvents();
    }

    public function find($code)
    {
        return array_filter($this->rawData,
            function ($value, $ind) use ($code) {
                return $value['employee_code'] == $code;
            },
            ARRAY_FILTER_USE_BOTH
        );
    }
}
