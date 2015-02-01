<?php
namespace FKSE\Collmex\Model\Query;

use FKSE\Collmex\Model\BaseModel;

/**
 * Class Payment
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class Payment extends BaseModel
{
    /**
     * @var int
     */
    private $invoiceId;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var float
     */
    private $actuallyPaidAmount;

    /**
     * @var float
     */
    private $reducedAmount;

    /**
     * @var int
     */
    private $fiscalYear;

    /**
     * @var int
     */
    private $documentId;

    /**
     * @var int
     */
    private $documentPosition;

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
     * @return Payment
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     *
     * @return Payment
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return float
     */
    public function getActuallyPaidAmount()
    {
        return $this->actuallyPaidAmount;
    }

    /**
     * @param float $actuallyPaidAmount
     *
     * @return Payment
     */
    public function setActuallyPaidAmount($actuallyPaidAmount)
    {
        $this->actuallyPaidAmount = $actuallyPaidAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getReducedAmount()
    {
        return $this->reducedAmount;
    }

    /**
     * @param float $reducedAmount
     *
     * @return Payment
     */
    public function setReducedAmount($reducedAmount)
    {
        $this->reducedAmount = $reducedAmount;

        return $this;
    }

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
     * @return Payment
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
     * @return Payment
     */
    public function setDocumentId($documentId)
    {
        $this->documentId = $documentId;

        return $this;
    }

    /**
     * @return int
     */
    public function getDocumentPosition()
    {
        return $this->documentPosition;
    }

    /**
     * @param int $documentPosition
     *
     * @return Payment
     */
    public function setDocumentPosition($documentPosition)
    {
        $this->documentPosition = $documentPosition;

        return $this;
    }
}
