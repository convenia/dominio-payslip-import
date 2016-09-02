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

    /**
     * @return array
     */
    public function getEvents()
    {
        return $this->rawData;
    }

    /**
     * @return Orm
     */
    public function query()
    {
        return new Orm($this);
    }
}
