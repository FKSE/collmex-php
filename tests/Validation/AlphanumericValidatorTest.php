<?php
namespace FKSE\Collmex\Test\Validation;

use FKSE\Collmex\Validation\AlphanumericValidator;

/**
 * Class AlphanumericValidatorTest
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class AlphanumericValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testValidate()
    {
        $validator = new AlphanumericValidator();
        //success
        $this->assertTrue($validator->validate('asdf'));
        $this->assertTrue($validator->validate('Frido Koch'));
        $this->assertTrue($validator->validate('Max61 e'));
        $this->assertTrue($validator->validate('Mäx'));
        $this->assertTrue($validator->validate('Öttä vün Ünterberg saß ünterm öffenen Fenster'));
        //fail
        $this->assertFalse($validator->validate('üä2+'));
        $this->assertFalse($validator->validate('++'));
        $this->assertFalse($validator->validate('xyza.'));
        $this->assertFalse($validator->validate('Peter, Marie'));
    }
}
