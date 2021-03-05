<?php
declare(strict_types = 1);

namespace UwKluis\Enums\FileRequest;

use MyCLabs\Enum\Enum;
use UwKluis\Enums\Traits\HasDescriptions;
use UwKluis\Enums\Traits\HasTranslations;

/**
 * Class Status
 */
final class Status extends Enum
{
    use HasTranslations;

    /** @var string */
    const OPEN = 'open';

    /** @var string */
    const COMPLETED = 'completed';

    /** @var string */
    const RECEIVED = 'received';

    /**
     * @var array
     */
    public static $translations = [
        'en_GB' => [
            self::OPEN      => 'Open',
            self::COMPLETED => 'Completed',
            self::RECEIVED  => 'Received',
        ],
        'nl_NL' => [
            self::OPEN      => 'Openstaand',
            self::COMPLETED => 'Afgerond',
            self::RECEIVED  => 'Ontvangen',
        ],
    ];
}
