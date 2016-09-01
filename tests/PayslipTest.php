<?php

namespace Convenia\Dominio\Payslip\Tests;

use Convenia\Dominio\Payslip\Payslip;

class PayslipTest extends \PHPUnit_Framework_TestCase
{
    public function test_import_file()
    {
        $file = __DIR__.'/data/fake_payslip_import.txt';

        $parser = new Payslip();
        $parser->importFromFile($file);

        $events = $parser->getEvents();

        $this->assertEquals(
            [
                0 => [
                    'employee_code' => '13',
                    'employee_name' => 'THORIN OAKENSHIELD',
                    'event_type' => 'D',
                    'role' => 'DWARF',
                    'description' => 'DESC VALE REFEIÇÃO'
                ]
            ],
            $events);
    }
}
