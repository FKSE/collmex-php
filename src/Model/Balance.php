<?php
namespace FKSE\Collmex\Model;

/**
 * Class Balance
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class Balance
{
    /**
     * @var int
     */
    private $accountId;

    /**
     * @var string
     */
    private $accountName;

    /**
     * @var float
     */
    private $balance;

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     *
     * @return Balance
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @param string $accountName
     *
     * @return Balance
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param float $balance
     *
     * @return Balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }
}
