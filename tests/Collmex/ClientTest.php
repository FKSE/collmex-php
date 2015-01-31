<?php
namespace FKSE\Collmex\Test;

use FKSE\Collmex\Client;
use FKSE\Collmex\Model\Query\Balances;

/**
 * Class ClientTest
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    public function testQuery()
    {
        $client = new Client('', '', '1005');
        $client->request();
    }
}
