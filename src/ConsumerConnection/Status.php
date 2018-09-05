<?php
declare(strict_types = 1);

namespace UwKluis\Enums\ConsumerConnection;

use MyCLabs\Enum\Enum;
use UwKluis\Enums\Traits\HasDescriptions;

/**
 * Class Status
 */
final class Status extends Enum
{
    use HasDescriptions;

    /** @var string  */
    const NEW = 'new';
    /** @var string  */
    const INVITE_SENT = 'invite_sent';
    /** @var string  */
    const PENDING = 'pending';
    /** @var string  */
    const ACTIVE = 'active';
    /** @var string  */
    const DECLINED = 'declined';
    /** @var string  */
    const REVOKED = 'revoked';

    /**
     * @var array
     */
    public static $descriptions = [
        'en_GB' => [
            self::NEW         => 'A connection has been requested',
            self::INVITE_SENT => 'An invite has been sent to the consumer',
            self::PENDING     => 'The consumer has opened the invite, but has not accepted yet',
            self::ACTIVE      => 'The connection is active',
            self::DECLINED    => 'The consumer has opened the invite, but declined it',
            self::REVOKED     => 'The consumer revoked the connection',
        ],
        'nl_NL' => [
            self::NEW         => 'Er is een verbinding aangevraagd',
            self::INVITE_SENT => 'Er is een uitnodiging verstuurd naar de consument',
            self::PENDING     => 'De consument heeft de uitnodiging geopend maar nog niet de rechten geaccepteerd',
            self::ACTIVE      => 'De verbinding is actief',
            self::DECLINED    => 'De consument heeft de uitnodiging geopend maar de rechten geweigerd',
            self::REVOKED     => 'De consument heeft de verbinding verbroken',
        ],
    ];
}
