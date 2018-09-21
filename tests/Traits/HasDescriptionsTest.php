<?php
declare(strict_types = 1);


namespace UwKluis\Enums\Traits;


use PHPUnit\Framework\TestCase;
use ReflectionClass;
use UwKluis\Enums\ConsumerConnection\Status;
use UwKluis\Enums\Contracts\HasDescriptions;
use UwKluis\Enums\DataModel\RepaymentType;

class HasDescriptionsTest extends TestCase
{
    public function testGetDescriptions()
    {
        foreach (Status::$descriptions as $language => $descriptions) {
            $this->assertEquals($descriptions, Status::getDescriptions($language));
        }

        $this->assertEquals(Status::$descriptions, Status::getDescriptions());
    }


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

    /**
     * @throws \ReflectionException
     */
    public function testDescriptions()
    {
        foreach ([
                     Status::class,
                     RepaymentType::class,
                 ] as $className) {
            $reflectionClass = new ReflectionClass($className);
            if ($reflectionClass->implementsInterface(HasDescriptions::class)) {
                foreach ($reflectionClass->getConstants() as $constant) {
                    foreach (Status::$descriptions as $language => $descriptions) {
                        $this->assertArrayHasKey($constant, Status::$descriptions[$language]);
                    }
                }
            }
        }
    }
}
