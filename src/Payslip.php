<?php

namespace Convenia\Dominio\Payslip;

use Convenia\Dominio\Payslip\Interfaces\ParserInterface;

/**
 * Class Payslip.
 */
class Payslip
{
    /**
     * @var ParserInterface
     */
    protected $parser;

    /**
     * @var array
     */
    protected $rawData;

    /**
     * Payslip constructor.
     */
    public function __construct()
    {
        $this->parser = new Parser();
    }

    /**
     * @param string $filePath
     */
    public function importFromFile($filePath)
    {
        $this->rawData = $this->parser->format($filePath);
    }

    public function getEvents()
    {
        return $this->rawData;
    }
}
