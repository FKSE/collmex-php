<?php
namespace FKSE\Collmex\Test;

use FKSE\Collmex\TypeResolver;

/**
 * Class TypeResolverTest
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class TypeResolverTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testToCollmex()
    {
        $this->assertNull(TypeResolver::toCollmex(__CLASS__));
        //test for all models
        $this->assertEquals('LOGIN', TypeResolver::toCollmex('FKSE\Collmex\Model\Auth'));
    }

    /**
     * @test
     */
    public function testToModel()
    {
        $this->assertNull(TypeResolver::toModel('Stuff'));
        //test for all models
        $this->assertEquals('FKSE\Collmex\Model\Auth', TypeResolver::toModel('LOGIN'));
    }
}
