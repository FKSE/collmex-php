<?php
namespace FKSE\Collmex\Exception;

/**
 * Class InvalidFieldException
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class InvalidTypeException extends \Exception
{
    /**
     * @param string     $message
     * @param int        $code
     * @param \Exception $previous
     * @param string     $given
     * @param string     $expected
     */
    public function __construct($message = null, $code = 0, \Exception $previous = null, $given = "", $expected = "")
    {
        if ($message === null) {
            $message = 'Expected type ' . $expected . ' - ' . $given . ' given';
        }
        parent::__construct($message, $code, $previous);
    }
}
