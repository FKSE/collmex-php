<?php
namespace FKSE\Collmex\Model;

/**
 * Class BaseModel
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
abstract class BaseModel
{
    /**
     * @var string
     */
    private $recordType;

    /**
     * @return string
     */
    public function getRecordType()
    {
        return $this->recordType;
    }

    /**
     * @param string $recordType
     *
     * @return BaseModel
     */
    public function setRecordType($recordType)
    {
        $this->recordType = $recordType;

        return $this;
    }
}
