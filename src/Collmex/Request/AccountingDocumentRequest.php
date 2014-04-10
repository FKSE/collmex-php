<?php
/**
 * Created by PhpStorm.
 * User: Frido
 * Date: 07/04/14
 * Time: 11:10
 */

namespace FKSE\Collmex\Request;


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


    /**
     * @return string
     */
    public function getRecordType()
    {
        return 'ACCDOC_GET';
    }
}
