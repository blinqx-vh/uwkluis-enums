<?php
declare(strict_types = 1);


namespace UwKluis\Enums\Traits;


use PHPUnit\Framework\TestCase;
use ReflectionClass;
use UwKluis\Enums\ConsumerConnection\Status;
use UwKluis\Enums\Contracts\HasTranslations;
use UwKluis\Enums\DataModel\AddressType;
use UwKluis\Enums\DataModel\Gender;
use UwKluis\Enums\DataModel\RepaymentType;

class HasTranslationsTest extends TestCase
{
    /**
     * @throws \ReflectionException
     */
    public function testGetTranslation()
    {
        $reflectionClass = new ReflectionClass(RepaymentType::class);
        foreach ($reflectionClass->getConstants() as $constant) {
            foreach (RepaymentType::$translations as $language => $translations) {
                if (isset(RepaymentType::$translations[$language][$constant])) {
                    $enum = new RepaymentType($constant);
                    $this->assertEquals(
                        RepaymentType::$translations[$language][$constant],
                        $enum->getTranslation($language)
                    );
                }
            }
        }
    }

    /**
     * @throws \ReflectionException
     */
    public function testTranslations()
    {
        foreach ([
                     Status::class,
                     RepaymentType::class,
                     Gender::class,
                     AddressType::class,
                 ] as $className) {
            $reflectionClass = new ReflectionClass($className);
            if ($reflectionClass->implementsInterface(HasTranslations::class)) {
                foreach ($reflectionClass->getConstants() as $constant) {
                    foreach ($className::$translations as $language => $translations) {
                        $this->assertArrayHasKey($constant, $className::$translations[$language]);
                    }
                }
            }
        }
    }
}
