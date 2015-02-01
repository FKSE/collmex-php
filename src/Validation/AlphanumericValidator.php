<?php
namespace FKSE\Collmex\Validation;

/**
 * Validate a string if alpha numeric
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class AlphanumericValidator implements ValidatorInterface
{
    /**
     * @param string $string
     *
     * @return bool
     */
    public function validate($string)
    {
        return preg_match('/^[äÄüÜöÖßA-Za-z0-9 ]+$/u', $string) === 1;
    }
}
