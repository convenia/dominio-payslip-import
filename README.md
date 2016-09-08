# dominio-payslip-import

## Requisitos

* PHP 5+

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
            [admission_date] => 24/08/2015
            [rubrik_name] => DESCONTO PLANO DE SAÚDE
            [rubrik_code] => 8111
            [reference] => 1,00
            [event_value] => 1,00
            [event_type] => D
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
            [employee_code] => 37
            [employee_name] => THORIN OAKENSHIELD
            [company_name] => THE LORD OF THE RINGS
            [company_reg] => 22924567000158
            [role] => DWARFS DURIN
            [cost_center] => LOTR OPERATIONS
            [admission_date] => 24/08/2015
            [rubrik_name] => DESCONTO PLANO DE SAÚDE
            [rubrik_code] => 8111
            [reference] => 1,00
            [event_value] => 1,00
            [event_type] => D

        )
       
    [1] => Array
        (
            [company_code] => 412
            [employee_code] => 50
            [employee_name] => GANDALF THE GREY
            [company_name] => THE LORD OF THE RINGS
            [company_reg] => 22924567000158
            [role] => LEADER OF  THE FELLOWSHIP
            [cost_center] => BR23 SALES QUALIFYING OUT
            [admission_date] => 24/08/2015
            [rubrik_name] => DESCONTO PLANO DE SAÚDE
            [rubrik_code] => 8111
            [reference] => 1,00
            [event_value] => 1,00
            [event_type] => D
        )
)
```
