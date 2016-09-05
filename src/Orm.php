<?php

namespace Convenia\Dominio\Payslip;

/**
 * Class Orm.
 */
class Orm
{
    /**
     * @var array
     */
    protected $events;

    /**
     * @var Payslip
     */
    protected $payslip;

    /**
     * Orm constructor.
     * @param Payslip $payslip
     */
    public function __construct(Payslip $payslip)
    {
        $this->payslip = $payslip;
        $this->events = $this->payslip->getEvents();
    }

    /**
     * @param $code
     * @return array
     */
    public function find($code)
    {
        return array_values(
            array_filter(
                $this->events,
                function ($value) use ($code) {
                    return $value['employee_code'] == $code;
                },
                ARRAY_FILTER_USE_BOTH
            )
        );
    }
}
