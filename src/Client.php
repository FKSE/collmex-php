<?php
namespace FKSE\Collmex;

use FKSE\Collmex\Model\Auth;
use FKSE\Collmex\Model\Query\BaseQuery;
use FKSE\Collmex\Request\AbstractRequest;
use ForceUTF8\Encoding;

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
     * @var string
     */
    protected $endpoint;

    /**
     * @var Auth
     */
    protected $auth;

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
        //create auth object
        $this->auth = (new Auth())
            ->setPassword($password)
            ->setUser($password);
        //endpoint url
        $this->endpoint = 'https://www.collmex.de/cgi-bin/cgi.exe?'.$this->customer.',0,data_exchange';
        //init guzzle client
        $this->client = new \GuzzleHttp\Client([
            'defaults' => [
                'headers' => [
                    'Content-Type' => 'text/csv',
                    'User-Agent' => 'Collmex-PHP/1.0'
                ]
            ]
        ]);
    }

    /**
     * @param AbstractRequest $request
     */
    public function request()
    {
        $response = $this->client->post($this->endpoint, [
            'body' => Encoding::toWin1252("LOGIN;1;;\nCUSTOMER_GET;9999;1\n")
        ]);

        $response = Encoding::toUTF8((string) $response->getBody());

        echo $response;
    }

    public function query(BaseQuery $query)
    {
        $request = $this->client->createRequest('POST', 'https://www.collmex.de/cgi-bin/cgi.exe?'.$this->customer.',0,data_exchange');
        $this->client->post('https://www.collmex.de/cgi-bin/cgi.exe?'.$this->customer.',0,data_exchange');
    }

}
