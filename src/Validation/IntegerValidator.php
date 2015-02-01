<?php
namespace FKSE\Collmex\Validation;

/**
 * Validate if a string is collmex type I
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class IntegerValidator implements ValidatorInterface
{
    /**
     * @param string $string
     *
     * @return bool
     */
    public function validate($string)
    {
        return preg_match('/^[0-9]+$/', $string) === 1;
    }
}
