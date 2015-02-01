<?php
namespace FKSE\Collmex\Test\Validation;

use FKSE\Collmex\Validation\DateValidator;

/**
 * Test DateValidation
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class DateValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testValidate()
    {
        //create validator
        $validator = new DateValidator();
        //success
        $this->assertTrue($validator->validate('20090121'));
        $this->assertTrue($validator->validate('20140101'));
        $this->assertTrue($validator->validate('20240430'));
        $this->assertTrue($validator->validate('21.01.2009'));
        $this->assertTrue($validator->validate('01.09.2019'));
        $this->assertTrue($validator->validate('14.11.2035'));
        //fail
        $this->assertFalse($validator->validate('xyz'));
        $this->assertFalse($validator->validate('201401011'));
        $this->assertFalse($validator->validate('20240231'));
        $this->assertFalse($validator->validate('21.01.4009'));
        $this->assertFalse($validator->validate('30.02.2019'));
        $this->assertFalse($validator->validate('14.13.2035'));
    }
}
