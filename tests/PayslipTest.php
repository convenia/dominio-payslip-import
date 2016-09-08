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
print_r($events);exit;
        $this->assertCount(27, $events);
        $this->assertArrayHasKey(0, $events);
    }
}
