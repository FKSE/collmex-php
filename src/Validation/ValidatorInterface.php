<?php
namespace FKSE\Collmex\Validation;

/**
 * @author Fridolin Koch <info@fridokoch.de>
 */
interface ValidatorInterface
{
    /**
     * @param string $string
     *
     * @return bool
     */
    public function validate($string);
}
