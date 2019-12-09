# IEBrasil

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

Essa pacote foi densenvolvido com a intenção de auxiliar na formatação das Inscrições Estaduais de todos os estados brasileiros.

## Instalação

Via Composer

``` bash
$ composer require eguana/iebrasil
```

Se você estiver utilizando uma versão inferior ao Laravel 5.5, adicione o service provider e facade desse pacote em config/app.php

``` php
'providers' => [
    ...
    /*
    * Third Part Service Providers...
    */
    ...
    Eguana\IEBrasil\IEBrasilServiceProvider::class,
 ]
'aliases' => [
  ...
  /*
   * Third Part Facades...
   */
  'IEBrasil' => Eguana\IEBrasil\Facades\IEBrasil::class,  
    
]
...
```


## Uso

```
<?php
use Eguana\IEBrasil\Facades\IEBrasil as IEBrasil;

    $estado =  'RN';
    $ie = '224499572';
    
    $ieFormatted = IEBrasil::format($ie, $estado);

#Result $ieFormatted: 22.449.957-2
```
## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email wesley@eguana.com.br instead of using the issue tracker.

## Credits

- [Eguana Soluções][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/eguana/iebrasil.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/eguana/iebrasil.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/eguana/iebrasil/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/eguana/iebrasil
[link-downloads]: https://packagist.org/packages/eguana/iebrasil
[link-travis]: https://travis-ci.org/eguana/iebrasil
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/eguana
[link-contributors]: ../../contributors
