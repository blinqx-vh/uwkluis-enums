<?php
declare(strict_types = 1);


namespace UwKluis\Enums\Traits;


trait HasTranslations
{
    public abstract function getValue();

    /**
     * @return string
     */
    public function getTranslation(string $lang): string
    {
        return self::$translations[$lang][$this->getValue()] ?? '';
    }
}
