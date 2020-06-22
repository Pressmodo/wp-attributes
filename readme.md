# WP Attributes
[![Latest Stable Version](https://img.shields.io/packagist/v/pressmodo/wp-attributes.svg)](https://packagist.org/packages/pressmodo/wp-attributes)
[![Total Downloads](https://img.shields.io/packagist/dt/pressmodo/wp-attributes.svg)](https://packagist.org/packages/pressmodo/wp-attributes)
[![Latest Unstable Version](https://img.shields.io/packagist/vpre/pressmodo/wp-attributes.svg)](https://packagist.org/packages/pressmodo/wp-attributes)
[![License](https://img.shields.io/packagist/l/pressmodo/wp-attributes.svg)](https://packagist.org/packages/pressmodo/wp-attributes)
![PHP from Packagist](https://img.shields.io/packagist/php-v/pressmodo/wp-attributes)

An helper library to generate attributes for HTML elements.

## Installation
``` bash
composer require pressmodo/wp-attributes
```

## Basic usage
```php
use Pressmodo\Attributes\AttributesInterface;

$sut = new AttributesInterface();

$sut->add( 'context', [
    'class'	=> 'color-primary',
    'id'	=> 'unique_id',
] );

// ' class="color-primary" id="unique_id"'
echo $sut->render( 'context' );


$sut->add( 'another_context', [
    'class'	=> '', // This will be skipped because empty
    'attr1'	=> null, // This will be skipped because null
    'attr2'	=> false, // This will be skipped because false
    'attr3'	=> 0, // This will be skipped because 0 is also false
    'id'	=> 'unique_id',
] );
// ' id="unique_id"'
echo $sut->render( 'another_context' );
```

## Credits
* [ItalyStrap/html](https://github.com/ItalyStrap/html)
