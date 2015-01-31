<?php
namespace FKSE\Collmex\Response;

/**
 * Class AbstractRequest
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
abstract class AbstractResponse
{
    /**
     * @return string
     */
    abstract public function getRecordType();

}
