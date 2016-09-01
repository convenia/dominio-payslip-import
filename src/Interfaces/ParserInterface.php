<?php

namespace Convenia\Dominio\Payslip\Interfaces;

/**
 * Interface Parser.
 */
interface ParserInterface
{
    /**
     * @param $filePath
     * @return array
     */
    public function format($filePath);
}
