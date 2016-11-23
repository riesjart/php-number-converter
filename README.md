# PHP Number Converter

This package has been forked from [saintkabyo/number-converter](https://github.com/saintkabyo/number-converter) and further developed by H&H|Digital, an Australian botique developer. Visit us at [hnh.digital](http://hnh.digital).

[![Latest Stable Version](https://poser.pugx.org/bluora/php-number-converter/v/stable.svg)](https://packagist.org/packages/bluora/php-number-converter) [![Total Downloads](https://poser.pugx.org/bluora/php-number-converter/downloads.svg)](https://packagist.org/packages/bluora/php-number-converter) [![Latest Unstable Version](https://poser.pugx.org/bluora/php-number-converter/v/unstable.svg)](https://packagist.org/packages/bluora/php-number-converter) [![License](https://poser.pugx.org/bluora/php-number-converter/license.svg)](https://packagist.org/packages/bluora/php-number-converter)

[![Build Status](https://travis-ci.org/bluora/php-number-converter.svg?branch=master)](https://travis-ci.org/bluora/php-number-converter) [![StyleCI](https://styleci.io/repos/61008347/shield?branch=master)](https://styleci.io/repos/61008347) [![Test Coverage](https://codeclimate.com/github/bluora/php-number-converter/badges/coverage.svg)](https://codeclimate.com/github/bluora/php-number-converter/coverage) [![Issue Count](https://codeclimate.com/github/bluora/php-number-converter/badges/issue_count.svg)](https://codeclimate.com/github/bluora/php-number-converter) [![Code Climate](https://codeclimate.com/github/bluora/php-number-converter/badges/gpa.svg)](https://codeclimate.com/github/bluora/php-number-converter)

This package provides the ability to convert a numerical number to a word, roman numeral and an ordinal suffix.

## Install

Via composer:

`$ composer require bluora/php-number-converter dev-master`

## Usage

### Convert to word

Supported number range -2147483647 to 2147483647.

```php
use Bluora/PhpNumberConverter;

$number_converter = new NumberConverter();
echo $number_converter->convert(122, 'W');
```

### Convert to roman

Supported number range 1 to 3999.

```php
use Bluora/PhpNumberConverter;

$number_converter = new NumberConverter();
echo $number_converter->convert(122, 'R');
```

### Ordinal suffix

Supported number range 1 to 2147483647.

```php
use Bluora/PhpNumberConverter;

$number_converter = new NumberConverter();
echo $number_converter->convert(122, 'O');
```

## Contributing

Please see [CONTRIBUTING](https://github.com/bluora/php-number-converter/blob/master/CONTRIBUTING.md) for details.

## Credits

* Forked from [saintkabyo/number-converter](https://github.com/saintkabyo/number-converter)
* [Rocco Howard](https://github.com/therocis)
* [All Contributors](https://github.com/bluora/laravel-number-converter/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/bluora/laravel-number-converter/blob/master/LICENSE) for more information.
