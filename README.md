### This package is compatible with Laravel 4.2

## Installation

Begin by installing this package through Composer. Just run following command to terminal-

```
composer require riasad/number-converter
```

Next step is to add the service provider. 
Open `config/app.php`, and add a new item to the providers array.

```php
'providers' => array(
    ...
    'Riasad\NumberConverter\NumberConverterServiceProvider',
)
```

Now add the alias.

```php
'aliases' => array(
	...
	'NumConvert'	  => 'Riasad\NumberConverter\Facades\NumberConverter',
)
```

##Instructions
Convert to word
(Supported number range -2147483647 to 2147483647)
```php
echo NumConvert::convert(122,'W');
```

Convert to roman
(Supported number range 1 to 3999)
```php
echo NumConvert::convert(122,'R');
```

Ordinal suffix
(Supported number range 1 to 2147483647)
```php
echo NumConvert::convert(122,'O');
```
