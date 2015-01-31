<?php
namespace FKSE\Collmex\Model;

/**
 * Query for AccountingDocument
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class AccountingDocument
{
    /**
     * @var integer
     */
    private $companyId;

    /**
     * @var integer
     */
    private $fiscalYear;

    /**
     * @var integer
     */
    private $documentId;

    private $documentDate;

    private $expensedDate;

    private $text;

    private $positionId;

    private $accountId;
}
