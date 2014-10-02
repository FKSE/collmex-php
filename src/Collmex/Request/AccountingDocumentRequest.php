<?php
namespace FKSE\Collmex\Request;

/**
 * Class AccountingDocumentRequest
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class AccountingDocumentRequest extends AbstractRequest
{

    public function __construct()
    {
        $this->fields = [
            'companyId'     => null,
            'fiscalYear'    => null,
            'documentId'    => null,
            'accountId'     => null,
            'costCenter'    => null,
            'customerId'    => null,
            'supplierId'    => null,
            'assetId'       => null,
            'invoiceId'     => null,
            'tripId'        => null,
            'documentText'  => null,
            'dateFrom'      => null,
            'dateTo'        => null,
            'cancellation'  => null,
            'changedOnly'   => null,
        ];
    }

    public function getCompanyId()
    {
        return $this->getField('companyId');
    }

    public function setCompanyId()
    {
        $this->setField('companyId', self::TYPE_INT, 8);

        return $this;
    }

    /**
     * @return string
     */
    public function getRecordType()
    {
        return 'ACCDOC_GET';
    }
}
