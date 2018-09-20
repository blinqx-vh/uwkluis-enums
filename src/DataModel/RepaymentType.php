<?php
declare(strict_types = 1);

namespace UwKluis\Enums\DataModel;

use MyCLabs\Enum\Enum;
use UwKluis\Enums\Contracts\HasTranslations as HasTranslationsInterface;
use UwKluis\Enums\Traits\HasTranslations;

/**
 * Class RepaymentType
 */
final class RepaymentType extends Enum implements HasTranslationsInterface
{
    use HasTranslations;

    /** @var string */
    const INTEREST_ONLY = 'interest_only';

    /** @var string */
    const SAVING = 'saving';

    /** @var string */
    const LIFE = 'life';

    /** @var string */
    const HYBRID = 'hybrid';

    /** @var string */
    const INVESTMENT = 'investment';

    /** @var string */
    const ANNUITY = 'annuity';

    /** @var string */
    const LINEAR = 'linear';

    /** @var string */
    const CREDIT = 'credit';

    /** @var string */
    const BRIDGING_LOAN = 'bridging_loan';

    /** @var string */
    const BANKSAVING = 'banksaving';

    /** @var array */
    public static $translations = [
        'nl_NL' => [
            self::INTEREST_ONLY => 'Aflosvrij',
            self::SAVING        => 'Spaar',
            self::LIFE          => 'Leven',
            self::HYBRID        => 'Hybride',
            self::INVESTMENT    => 'Beleggers',
            self::ANNUITY       => 'Annuïteiten',
            self::LINEAR        => 'Lineair',
            self::CREDIT        => 'Krediet',
            self::BRIDGING_LOAN => 'Overbruggingskrediet',
            self::BANKSAVING    => 'Banksparen',
        ],
    ];
}
