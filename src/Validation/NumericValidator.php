<?php
namespace FKSE\Collmex\Validation;

/**
 * Class NumericValidator
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class NumericValidator implements ValidatorInterface
{
    /**
     * @param string $string
     *
     * @return bool
     */
    public function validate($string)
    {
        return preg_match("/^[0-9]+(,[0-9]{0,3})?$/", $string);
    }
}
