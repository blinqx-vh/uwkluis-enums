<?php
declare(strict_types = 1);


namespace UwKluis\Enums\Contracts;


interface HasDescriptions
{
    /**
     * @return string
     */
    public function getDescription(string $lang): string;
}
