<?php
declare(strict_types = 1);


namespace UwKluis\Enums\ConsumerConnection;


use PHPUnit\Framework\TestCase;
use ReflectionClass;

class StatusTest extends TestCase
{

    /**
     * @throws \ReflectionException
     */
    public function testDescriptions()
    {
        $reflectionClass = new ReflectionClass(Status::class);
        foreach ($reflectionClass->getConstants() as $constant) {
            foreach (Status::$descriptions as $language => $descriptions) {
                $this->assertArrayHasKey($constant, Status::$descriptions[$language]);
            }
        }
    }

}
