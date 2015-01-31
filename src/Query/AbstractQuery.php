<?php
namespace FKSE\Collmex\Query;

use FKSE\Collmex\Client;
use FKSE\Collmex\Model\Query\BaseQuery;

/**
 * Class AbstractQuery
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
abstract class AbstractQuery
{
    /**
     * @var BaseQuery
     */
    private $query;


    private $client;

    /**
     * @param BaseQuery $query
     */
    public function __construct(BaseQuery $query, Client $client)
    {
        $this->query = $query;
    }

    /**
     * @return BaseQuery
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @return Object|null
     */
    abstract function execute();
}
