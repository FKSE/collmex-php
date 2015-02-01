<?php
namespace FKSE\Collmex\Test\Validation;

use FKSE\Collmex\Validation\IntegerValidator;

/**
 *  Test IntegerValidator
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class IntegerValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testValidate()
    {
        $validator = new IntegerValidator();
        //success
        $this->assertTrue($validator->validate('1234'));
        $this->assertTrue($validator->validate('4235'));
        $this->assertTrue($validator->validate('1'));
        $this->assertTrue($validator->validate('12'));
        $this->assertTrue($validator->validate('001'));
        //fail
        $this->assertFalse($validator->validate('1,2'));
        $this->assertFalse($validator->validate('1.2'));
        $this->assertFalse($validator->validate('.2'));
        $this->assertFalse($validator->validate('asf'));
    }
}
