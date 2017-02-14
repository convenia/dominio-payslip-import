<?php

namespace Convenia\Dominio\Payslip;

use Illuminate\Support\Collection;

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
     * @var Collection
     */
    protected $collect;

    /**
     * Orm constructor.
     * @param Payslip $payslip
     */
    public function __construct(Payslip $payslip)
    {
        $this->payslip = $payslip;
        $this->events = $this->payslip->getEvents();
        $this->collect = collect($this->payslip->getEvents());
    }

    public function find($code)
    {
        $this->collect->filter(function ($value, $key) use ($code) {
            return $value['employee_code'] == $code;
        });

        return $this;
    }

    public function employees()
    {
        $this->collect = $this->collect->groupBy('employee_code');

        return $this;
    }

    public function first()
    {
        $this->collect = collect($this->collect->first());

        return $this;
    }

    public function get()
    {
        return $this->collect->toArray();
    }
}
