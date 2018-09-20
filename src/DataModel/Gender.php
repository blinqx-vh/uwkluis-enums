<?php
declare(strict_types = 1);

namespace UwKluis\Enums\DataModel;

use MyCLabs\Enum\Enum;
use UwKluis\Enums\Traits\HasTranslations;
use UwKluis\Enums\Contracts\HasTranslations as HasTranslationsInterface;

/**
 * Class Gender
 */
class Gender extends Enum implements HasTranslationsInterface
{
    use HasTranslations;
    /**  */
    const GENDER_MALE = 'male';
    /**  */
    const GENDER_FEMALE = 'female';
    /**  */
    const GENDER_OTHER = 'other';

    /** @var array */
    public static $translations = [
        'nl_NL' => [
            self::GENDER_MALE => 'man',
            self::GENDER_FEMALE => 'vrouw',
            self::GENDER_OTHER => 'overige',
        ]
    ];
}
