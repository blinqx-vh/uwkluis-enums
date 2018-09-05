<?php
declare(strict_types = 1);


namespace UwKluis\Enums\Traits;


use PHPUnit\Framework\TestCase;
use ReflectionClass;
use UwKluis\Enums\ConsumerConnection\Status;

class HasDescriptionsTest extends TestCase
{

    /**
     * @throws \ReflectionException
     */
    public function testGetDescription()
    {
        $reflectionClass = new ReflectionClass(Status::class);
        foreach ($reflectionClass->getConstants() as $constant) {
            foreach (Status::$descriptions as $language => $descriptions) {
                if (isset(Status::$descriptions[$language][$constant])) {
                    $enum = new Status($constant);
                    $this->assertEquals(Status::$descriptions[$language][$constant], $enum->getDescription($language));
                }
            }
        }
    }
}
