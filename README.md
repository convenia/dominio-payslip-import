# dominio-payslip-import

## Uso

```php
<?php 

$filePath = 'PATH/TO/TXT/FILE';

$payslip = new Payslip();
$payslip->importFromFile($filePath);

$events = $payslip->getEvents();

// Exemplo de retorno

Array
(
    [0] => Array
        (
            [employee_code] => 13
            [employee_name] => THORIN OAKENSHIELD
            [event_type] => D
            [role] => DWARF
            [description] => DESC VALE REFEIÇÃO 
        )

)

```
