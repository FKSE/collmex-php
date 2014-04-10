<?php
namespace FKSE\Collmex;

use FKSE\Collmex\Response\AbstractRequest;

/**
 * Class Client
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class Client
{
    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $customer;

    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * @param string $username
     * @param string $password
     * @param string $customer
     */
    public function __construct($username, $password, $customer)
    {
        $this->username = $username;
        $this->password = $password;
        $this->customer = $customer;

        //init guzzle client
        $this->client = new \GuzzleHttp\Client();
    }

    /**
     * @param AbstractRequest $request
     */
    public function request(AbstractRequest $request)
    {
        $request = $this->client->createRequest('POST', 'https://www.collmex.de/cgi-bin/cgi.exe?'.$this->customer.',0,data_exchange');

    }
}
