<?php
namespace FKSE\Collmex;

use FKSE\Collmex\Request\AbstractRequest;
use FKSE\Collmex\Response\AbstractResponse;

/**
 * Convert an AbstractRequest to a Collmex csv; Convert Collmex csv response to an instance of AbstractResponse
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class Transcoder
{
    const ENCODING_REMOTE = 'WINDOWS-1252';

    const ENCODING_LOCAL = 'UTF-8';
    /**
     * @param AbstractRequest $request
     *
     * @return string
     */
    public function encode(AbstractRequest $request)
    {
        return '';
    }

    /**
     * @param string $data
     *
     * @return AbstractResponse
     */
    public function decode($data)
    {

    }
}
