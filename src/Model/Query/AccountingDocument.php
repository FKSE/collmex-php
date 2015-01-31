<?php
namespace FKSE\Collmex\Model\Query;

/**
 * Query for AccountingDocument
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class AccountingDocument extends BaseQuery
{
    /**
     * @var integer
     */
    private $fiscalYear;

    /**
     * @var integer
     */
    private $documentId;

    /**
     * @var integer
     */
    private $costCenter;

    /**
     * @var integer
     */
    private $supplierId;

    /**
     * @var integer
     */
    private $assetId;

    /**
     * @var integer
     */
    private $invoiceId;

    /**
     * @var integer
     */
    private $tripId;

    /**
     * @var string
     */
    private $documentText;

    /**
     * @var \Datetime
     */
    private $dateFrom;

    /**
     * @var \Datetime
     */
    private $dateTo;

    /**
     * @var bool
     */
    private $withdrawalsOnly;

    /**
     * @var bool
     */
    private $changedOnly;

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
     * @return AccountingDocument
     */
    public function setFiscalYear($fiscalYear)
    {
        $this->fiscalYear = $fiscalYear;

        return $this;
    }

    /**
     * @return int
     */
    public function getDocumentId()
    {
        return $this->documentId;
    }

    /**
     * @param int $documentId
     *
     * @return AccountingDocument
     */
    public function setDocumentId($documentId)
    {
        $this->documentId = $documentId;

        return $this;
    }

    /**
     * @return int
     */
    public function getCostCenter()
    {
        return $this->costCenter;
    }

    /**
     * @param int $costCenter
     *
     * @return AccountingDocument
     */
    public function setCostCenter($costCenter)
    {
        $this->costCenter = $costCenter;

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
     * @return AccountingDocument
     */
    public function setSupplierId($supplierId)
    {
        $this->supplierId = $supplierId;

        return $this;
    }

    /**
     * @return int
     */
    public function getAssetId()
    {
        return $this->assetId;
    }

    /**
     * @param int $assetId
     *
     * @return AccountingDocument
     */
    public function setAssetId($assetId)
    {
        $this->assetId = $assetId;

        return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * @param int $invoiceId
     *
     * @return AccountingDocument
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;

        return $this;
    }

    /**
     * @return int
     */
    public function getTripId()
    {
        return $this->tripId;
    }

    /**
     * @param int $tripId
     *
     * @return AccountingDocument
     */
    public function setTripId($tripId)
    {
        $this->tripId = $tripId;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentText()
    {
        return $this->documentText;
    }

    /**
     * @param string $documentText
     *
     * @return AccountingDocument
     */
    public function setDocumentText($documentText)
    {
        $this->documentText = $documentText;

        return $this;
    }

    /**
     * @return \Datetime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * @param \Datetime $dateFrom
     *
     * @return AccountingDocument
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * @return \Datetime
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * @param \Datetime $dateTo
     *
     * @return AccountingDocument
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isWithdrawalsOnly()
    {
        return $this->withdrawalsOnly;
    }

    /**
     * @param boolean $withdrawalsOnly
     *
     * @return AccountingDocument
     */
    public function setWithdrawalsOnly($withdrawalsOnly)
    {
        $this->withdrawalsOnly = $withdrawalsOnly;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isChangedOnly()
    {
        return $this->changedOnly;
    }

    /**
     * @param boolean $changedOnly
     *
     * @return AccountingDocument
     */
    public function setChangedOnly($changedOnly)
    {
        $this->changedOnly = $changedOnly;

        return $this;
    }
}
