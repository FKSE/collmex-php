<?php
namespace FKSE\Collmex\Model\Query;

/**
 * Class AccountingBalances
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class Balances extends BaseQuery
{
    /**
     * 1 = Sonstiges,
     * 2 = Anlagevermögen,
     * 3 = Finanzkonten,
     * 4 = Einnahmen,
     * 5 = Ausgaben,
     * 6 = Umsatzsteuer,
     * 7 = Vorsteuer,
     * 8 = Forderungen,
     * 9 = Verbindlichkeiten,
     * 10 = Abschreibungen,
     * 11 = Rückstellungen,
     * 12 = Bestand,
     * 13 = Privat,
     * 14 = Nicht abziehbare Ausgaben
     */
    const CATEGORY_OTHER = 1;
    const CATEGORY_CAPITAL_ASSETS = 2;
    const CATEGORY_FINANCIAL_ACCOUNTS = 3;
    const CATEGORY_REVENUES = 4;
    const CATEGORY_EXPENSES = 5;
    const CATEGORY_VALUE_ADDED_TAX  = 6;
    const CATEGORY_VALUE_ADDED_TAX_ON_INPUT = 7;
    const CATEGORY_CLAIMS = 8;
    const CATEGORY_ACCOUNTS_PAYABLE = 9;
    const CATEGORY_REGULAR_DEPRECIATION = 10;
    const CATEGORY_ACCRUED_LIABILITIES = 11;
    const CATEGORY_HOLDINGS = 12;
    const CATEGORY_PRIVATE = 13;
    const CATEGORY_NON_DEDUCTIBLE_EXPENSES = 14;

    /**
     * @var int
     */
    private $fiscalYear;

    /**
     * @var \DateTime
     */
    private $untilDate;

    /**
     * @var int
     */
    private $accountId;

    /**
     * @var int
     */
    private $accountCategory;

    /**
     * @var int
     */
    private $customerId;

    /**
     * @var int
     */
    private $supplierId;

    /**
     * @var string
     */
    private $costCenter;

    /**
     * @return int
     */
    public function getFiscalYear()
    {
        return $this->fiscalYear;
    }

    /**
     * @param int $fiscalYear
     *
     * @return AccountingBalances
     */
    public function setFiscalYear($fiscalYear)
    {
        $this->fiscalYear = $fiscalYear;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUntilDate()
    {
        return $this->untilDate;
    }

    /**
     * @param \DateTime $untilDate
     *
     * @return AccountingBalances
     */
    public function setUntilDate($untilDate)
    {
        $this->untilDate = $untilDate;

        return $this;
    }

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
     * @return AccountingBalances
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * @return int
     */
    public function getAccountCategory()
    {
        return $this->accountCategory;
    }

    /**
     * @param int $accountCategory
     *
     * @return AccountingBalances
     */
    public function setAccountCategory($accountCategory)
    {
        $this->accountCategory = $accountCategory;

        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param int $customerId
     *
     * @return AccountingBalances
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @return int
     */
    public function getSupplierId()
    {
        return $this->supplierId;
    }

    /**
     * @param int $supplierId
     *
     * @return AccountingBalances
     */
    public function setSupplierId($supplierId)
    {
        $this->supplierId = $supplierId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCostCenter()
    {
        return $this->costCenter;
    }

    /**
     * @param string $costCenter
     *
     * @return AccountingBalances
     */
    public function setCostCenter($costCenter)
    {
        $this->costCenter = $costCenter;

        return $this;
    }
}
