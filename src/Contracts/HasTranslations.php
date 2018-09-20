<?php
declare(strict_types = 1);

namespace UwKluis\Enums\Contracts;

/**
 * Class HasTranslations
 */
interface HasTranslations
{
    /**
     * @return string
     */
    public function getTranslation(string $lang): string;
}
