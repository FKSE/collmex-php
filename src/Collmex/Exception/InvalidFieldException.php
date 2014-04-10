<?php
namespace FKSE\Collmex\Exception;

/**
 * Class InvalidFieldException
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class InvalidFieldException extends \Exception
{
    /**
     * @param string     $message
     * @param int        $code
     * @param \Exception $previous
     * @param string     $field
     * @param string     $type
     */
    public function __construct($message = "", $code = 0, \Exception $previous = null, $field = "", $type = "")
    {
        if ($message == "") {
            $message = $field . ' is no valid option in ' . $type;
        }
        parent::__construct($message, $code, $previous);
    }
}
