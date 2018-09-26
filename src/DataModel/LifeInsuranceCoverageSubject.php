<?php
declare(strict_types = 1);

namespace UwKluis\Enums\DataModel;

use MyCLabs\Enum\Enum;

/**
 * Class LifeInsuranceCoveragePerson
 */
final class LifeInsuranceCoverageSubject extends Enum
{
    /** @var string */
    const APPLICANT = 'applicant';
    /** @var string */
    const PARTNER = 'partner';
}
