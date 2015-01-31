<?php
namespace FKSE\Collmex\Model\Query;

/**
 * Class Payments
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class Payments extends BaseQuery
{
    /**
     * @var int
     */
    private $invoiceId;

    /**
     * @var bool
     */
    private $newPaymentsOnly;

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
     * @return Payments
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isNewPaymentsOnly()
    {
        return $this->newPaymentsOnly;
    }

    /**
     * @param boolean $newPaymentsOnly
     *
     * @return Payments
     */
    public function setNewPaymentsOnly($newPaymentsOnly)
    {
        $this->newPaymentsOnly = $newPaymentsOnly;

        return $this;
    }
}
