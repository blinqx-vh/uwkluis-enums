<?php
declare(strict_types = 1);

namespace UwKluis\Enums\Traits;

trait HasTranslations
{
    public abstract function getValue();

    /**
     * @param string $lang
     *
     * @return string
     */
    public static function getTranslations(string $lang): array
    {
        return self::$translations[$lang];
    }

    /**
     * @param string $lang
     *
     * @return string
     */
    public function getTranslation(string $lang): string
    {
        return self::$translations[$lang][$this->getValue()] ?? '';
    }
}
