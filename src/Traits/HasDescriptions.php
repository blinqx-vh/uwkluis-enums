<?php
declare(strict_types = 1);


namespace UwKluis\Enums\Traits;


trait HasDescriptions
{
    public abstract function getValue();

    public static function getDescriptions(string $lang = null): array
    {
        return $lang ? self::$descriptions[$lang] : self::$descriptions;
    }

    /**
     * @return string
     */
    public function getDescription(string $lang): string
    {
        return self::$descriptions[$lang][$this->getValue()] ?? '';
    }
}
