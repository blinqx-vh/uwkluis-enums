# UwKluis Enums

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


This package contains enumerations relevant to connecting to the UwKluis APIs, as well as for the JSON data model.
## Structure


```
src/
src/ConsumerConnection
src/Contracts
src/DataModel
src/Traits
tests/
```


## Install

Via Composer

``` bash
$ composer require uwkluis/enums
```

## Usage
Instantiate enum objects with their allowed values.
```.php
<?php
use \UwKluis\Enums\ConsumerConnection\Status;

$status = new Status(Status::NEW);

echo $status->getDescription();
```

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email REDACTED instead of using the issue tracker.

## Credits

- [THE UwKluis TEAM][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/uwkluis/enums.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/uwkluis/enums/master.svg?style=flat-square
[ico-scrutinizer]: https://scrutinizer-ci.com/gp/uwkluis-enums/badges/coverage.png?b=master&s=da9d7459b43dc2eb619a63f841758f176d8420ab
[ico-code-quality]: https://scrutinizer-ci.com/gp/uwkluis-enums/badges/quality-score.png?b=master&s=6a0cd15cdcd8393a9fd12d2e6ba2a9eaddc19381
[ico-downloads]: https://img.shields.io/packagist/dt/uwkluis/enums.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/uwkluis/enums
[link-travis]: https://travis-ci.org/uwkluis/enums
[link-scrutinizer]: https://scrutinizer-ci.com/g/uwkluis/enums/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/uwkluis/enums
[link-downloads]: https://packagist.org/packages/uwkluis/enums
[link-author]: https://github.com/REDACTED
