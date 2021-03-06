# dominio-payslip-import

[![Latest Stable Version](https://poser.pugx.org/convenia/dominio-payslip-import/v/stable)](https://packagist.org/packages/convenia/dominio-payslip-import) [![Build Status](https://travis-ci.org/convenia/dominio-payslip-import.svg?branch=master)](https://travis-ci.org/convenia/dominio-payslip-import) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/b9d51779126a42fea449632cff17984f)](https://www.codacy.com/app/Convenia/dominio-payslip-import) [![StyleCI](https://styleci.io/repos/67138972/shield)](https://styleci.io/repos/67138972) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/b38b2c28-b697-4843-983c-52ffac7c0221/mini.png)](https://insight.sensiolabs.com/projects/b38b2c28-b697-4843-983c-52ffac7c0221) [![License](https://poser.pugx.org/convenia/dominio-payslip-import/license)](https://packagist.org/packages/convenia/dominio-payslip-import)

## Requisitos

* PHP >= 7.0

### Instale usando o composer [Composer](http://getcomposer.org/)

```bash
composer require convenia/dominio-payslip-import
```

## Uso

```php
<?php 
use Convenia\Dominio\Payslip\Payslip;

$filePath = 'PATH/TO/TXT/FILE';

$payslip = new Payslip;
$payslip->importFromFile($filePath);

$events = $payslip->getEvents();

// Exemplo de retorno

Array
(
    [0] => Array
        (
            [company_code] => 412
            [employee_code] => 50
            [employee_name] => GANDALF THE GREY
            [company_name] => THE LORD OF THE RINGS
            [company_reg] => 22924567000158
            [role] => LEADER OF  THE FELLOWSHIP
            [cost_center] => BR23 SALES QUALIFYING OUT
            [company_department] => 1,000000
            [company_branch] => 1
            [admission_date] => 24/08/2015
            [rubrik_name] => DESCONTO PLANO DE SAÚDE
            [rubrik_code] => 8111
            [reference] => 1,00
            [event_value] => 1,00
            [event_type] => D
            [salary] => 2616,75
            [base_inss] => 2616,75
            [base_irrf] => 2328,91
            [base_fgts] => 2616,75
            [month_fgts] => 209,340000
            [level_irrf] => 7,50

        )

)
```

## Retornar todos os eventos de um único funcionário

Após importar um arquivo você poderá retornar todos os eventos encontrados no arquivo com o método getEvents() ou retornar apenas os eventos de um determinado funcionário com o método find()

```php
<?php 
use Convenia\Dominio\Payslip\Payslip;

$filePath = 'PATH/TO/TXT/FILE';

$payslip = new Payslip;
$payslip->importFromFile($filePath);

$events = $payslip->query()->find(13);

// Exemplo de retorno

Array
(
    [0] => Array
        (
            [company_code] => 412
            [employee_code] => 50
            [employee_name] => GANDALF THE GREY
            [company_name] => THE LORD OF THE RINGS
            [company_reg] => 22924567000158
            [role] => LEADER OF  THE FELLOWSHIP
            [cost_center] => BR23 SALES QUALIFYING OUT
            [company_department] => 1,000000
            [company_branch] => 1
            [admission_date] => 24/08/2015
            [rubrik_name] => DESCONTO PLANO DE SAÚDE
            [rubrik_code] => 8111
            [reference] => 1,00
            [event_value] => 1,00
            [event_type] => D
            [salary] => 2616,75
            [base_inss] => 2616,75
            [base_irrf] => 2328,91
            [base_fgts] => 2616,75
            [month_fgts] => 209,340000
            [level_irrf] => 7,50

        )
       
    [1] => Array
        (
            [company_code] => 412
            [employee_code] => 50
            [employee_name] => THORIN
            [company_name] => THE LORD OF THE RINGS
            [company_reg] => 22924567000158
            [role] => DWARF
            [cost_center] => BR23 SALES QUALIFYING OUT
            [company_department] => 1,000000
            [company_branch] => 1
            [admission_date] => 24/08/2015
            [rubrik_name] => DESCONTO PLANO DE SAÚDE
            [rubrik_code] => 8111
            [reference] => 1,00
            [event_value] => 1,00
            [event_type] => P
            [salary] => 2616,75
            [base_inss] => 2616,75
            [base_irrf] => 2328,91
            [base_fgts] => 2616,75
            [month_fgts] => 209,340000
            [level_irrf] => 7,50
        )
)
```
