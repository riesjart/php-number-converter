### This package is compatible with Laravel 5.*

## Installation

Install using composer:

```
composer require bluora/number-converter dev-master
```

Add the class the service provider. 

In `config/app.php`, update the providers section with:

```php
'providers' => array(
    ...
    'NumberConverter\NumberConverterServiceProvider',
)
```

Add an alias for this class:

```php
'aliases' => array(
	...
	'NumConvert'	  => 'NumberConverter\Facades\NumberConverter',
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
