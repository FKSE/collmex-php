<?php
namespace FKSE\Collmex\Test\Validation;

use FKSE\Collmex\Validation\NumericValidator;

/**
 * Class NumericValidatorTest
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class NumericValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testValidate()
    {
        //create validator
        $validator = new NumericValidator();
        //success
        $this->assertTrue($validator->validate('23'));
        $this->assertTrue($validator->validate('49,1'));
        $this->assertTrue($validator->validate('204,50'));
        $this->assertTrue($validator->validate('984,134'));
        $this->assertTrue($validator->validate('0,1'));
        $this->assertTrue($validator->validate('0'));
        //fail
        $this->assertFalse($validator->validate('984,'));
        $this->assertFalse($validator->validate('984,1234'));
        $this->assertFalse($validator->validate('984,12345'));
        $this->assertFalse($validator->validate(',12345'));
        $this->assertFalse($validator->validate('asdf'));
    }
}
