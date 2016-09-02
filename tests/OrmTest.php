<?php

namespace Convenia\Dominio\Payslip\Tests;

use Convenia\Dominio\Payslip\Payslip;

class OrmTest extends \PHPUnit_Framework_TestCase
{
    public function test_find()
    {
        $file = __DIR__.'/data/fake_payslip_import.txt';

        $parser = new Payslip();
        $parser->importFromFile($file);
        $events = $parser->query()->find(37);
        $this->assertNotNull($events);
    }
}
