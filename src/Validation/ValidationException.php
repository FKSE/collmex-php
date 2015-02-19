<?php
namespace FKSE\Collmex\Test\Validation;

use FKSE\Collmex\Validation\ValidatorInterface;

/**
 * Class ValidationException
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class ValidationException extends \Exception
{
    /**
     * @param string     $message
     * @param int        $code
     * @param \Exception $previous
     * @param string     $field
     * @param int        $maxLength
     */
    public function __construct($message = "", $code = 0, \Exception $previous = null, $field = "", ValidatorInterface $class = null)
    {
        if ($message == "") {
            $message = sprintf('Data for Field %s is too long, maximum length is %d', $field, $maxLength);
        }
        parent::__construct($message, $code, $previous);
    }
}
