<?php

namespace Convenia\Dominio\Payslip;

use Convenia\Dominio\Payslip\Interfaces\ParserInterface;
use Convenia\Dominio\Payslip\Parsers\Csv;

/**
 * Class Parser.
 */
class Parser
{
    /**
     * @var ParserInterface
     */
    protected $parserDriver;

    /**
     * Parser constructor.
     */
    public function __construct()
    {
        $this->parserDriver = new Csv();
    }

    /**
     * @param $filePath
     * @return array
     */
    public function format($filePath)
    {
        return $this->parserDriver->format($filePath);
    }
}
