<?php
declare(strict_types = 1);

namespace UwKluis\Enums\DocumentType;

use MyCLabs\Enum\Enum;
use UwKluis\Enums\Traits\HasDescriptions;
use UwKluis\Enums\Traits\HasTranslations;

/**
 * Class Status
 */
final class Status extends Enum
{
    use HasDescriptions;
    use HasTranslations;

    /** @var string */
    const UPLOADED = 'uploaded';

    /** @var string */
    const OPEN = 'open';

    /** @var string */
    const REJECTED = 'rejected';

    /** @var string */
    const APPROVED = 'approved';

    /** temporary added legacy options for backwards compatibility */
    /** @var string */
    const NORMAL = 'normal';

    /**
     * @var array
     */
    public static $descriptions = [
        'en_GB' => [
            self::APPROVED => 'Uploaded file was approved',
            self::OPEN     => 'Consumer has received the document request but did not take any action yet',
            self::UPLOADED => 'Consumer has uploaded a file',
            self::REJECTED => 'Uploaded file was rejected',
            self::NORMAL   => 'Normal',
        ],
        'nl_NL' => [
            self::APPROVED => 'Documentenverzoek is goedgekeurd',
            self::OPEN     => 'Consument heeft het documentenverzoek ontvangen en nog geen actie ondernomen',
            self::UPLOADED => 'Consument heeft een bestand geüpload',
            self::REJECTED => 'Documentenverzoek is afgekeurd',
            self::NORMAL   => 'Normaal',
        ],
    ];

    /**
     * @var array
     */
    public static $translations = [
        'en_GB' => [
            self::OPEN     => 'Open',
            self::UPLOADED => 'Uploaded',
            self::REJECTED => 'Rejected',
            self::APPROVED => 'Approved',
            self::NORMAL   => 'Normal',
        ],
        'nl_NL' => [
            self::OPEN     => 'Openstaand',
            self::UPLOADED => 'Ontvangen',
            self::REJECTED => 'Afgewezen',
            self::APPROVED => 'Goedgekeurd',
            self::NORMAL   => 'Normaal',
        ],
    ];
}
