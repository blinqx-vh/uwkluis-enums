<?php
declare(strict_types = 1);

namespace UwKluis\Enums\DataModel;
use UwKluis\Enums\Contracts\HasTranslations as HasTranslationsInterface;

use MyCLabs\Enum\Enum;
use UwKluis\Enums\Traits\HasTranslations;

final class AddressType extends Enum implements HasTranslationsInterface
{
    use HasTranslations;

    /** @var string */
    const EMPTY = 'empty';

    /** @var string */
    const OWNED = 'owned';
    /** @var string */
    const RENTED = 'rented';
    /** @var string */
    const OTHER = 'other';

    /** @var array */
    public static $translations = [
        'nl_NL' => [
            self::OWNED => 'Koopwoning',
            self::RENTED => 'Huurwoning',
            self::OTHER => 'Anders',
            self::EMPTY => '',
        ]
    ];

}
