<?php
namespace FKSE\Collmex\Test\Encoder;

use FKSE\Collmex\Encoder\CollmexEncoder;
use FKSE\Collmex\Model\Auth;
use FKSE\Collmex\Model\Query\AccountingDocument;

/**
 * Class CollmexEncoderTest
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class CollmexEncoderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testEncode()
    {
        //test with auth
        $auth = (new Auth)
            ->setUser('test')
            ->setPassword('asdf');
        //create encoder
        $encoder = new CollmexEncoder(__DIR__ . '/../../src/Definition');
        $encoder->encode($auth);
    }
}
