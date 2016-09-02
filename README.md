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

## Retornar todos os funcionárrios à partir de seu código

Após importar um arquivo você poderá retornar todos os eventos encontrados no arquivo com o método getEvents() ou retornar apenas os eventos de um determinado funcionário com o método find()

```php
<?php 

$filePath = 'PATH/TO/TXT/FILE';

$payslip = new Payslip();
$payslip->importFromFile($filePath);

$events = $payslip->query()->find(13);

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
