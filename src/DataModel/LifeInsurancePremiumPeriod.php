<?php
declare(strict_types = 1);

namespace UwKluis\Enums\DataModel;

use MyCLabs\Enum\Enum;
use UwKluis\Enums\Contracts\HasTranslations as HasTranslationsInterface;
use UwKluis\Enums\Traits\HasTranslations;

/**
 * Class LifeInsurancePremiumPeriod
 */
final class LifeInsurancePremiumPeriod extends Enum implements HasTranslationsInterface
{
    use HasTranslations;
    const PER_MONTH = 'per_month';
    const PER_QUARTER = 'per_quarter';
    const PER_HALF_YEAR = 'per_half_year';
    const PER_YEAR = 'per_year';
    const AT_ONCE = 'at_once';

    private static $translations = [
        'nl_NL' => [
            self::PER_MONTH     => 'per maand',
            self::PER_QUARTER   => 'per kwartaal',
            self::PER_HALF_YEAR => 'per half jaar',
            self::PER_YEAR      => 'per jaar',
            self::AT_ONCE       => 'direct',
        ],
    ];
}
