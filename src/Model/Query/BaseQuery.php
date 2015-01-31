<?php
namespace FKSE\Collmex\Model\Query;

/**
 * Base for all queries
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
abstract class BaseQuery
{
    /**
     * @var int
     */
    private $companyId;

    /**
     * @var string
     */
    private $systemName;

    /**
     * @return int
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @param int $companyId
     *
     * @return BaseQuery
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSystemName()
    {
        return $this->systemName;
    }

    /**
     * @param string $systemName
     *
     * @return BaseQuery
     */
    public function setSystemName($systemName)
    {
        $this->systemName = $systemName;

        return $this;
    }
}
