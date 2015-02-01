<?php
namespace FKSE\Collmex\Validation;

/**
 * Class DateValidation
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class DateValidator implements ValidatorInterface
{
    /**
     * @param string $string
     *
     * @return bool
     */
    public function validate($string)
    {
        $date = null;
        if (preg_match("/^20[0-9]{2}(10|11|12|0[0-9])(30|31|[0-2][0-9])$/uim", $string) === 1) {
            $date = \DateTime::createFromFormat('Ymd', $string);
        } elseif (preg_match("/^(30|31|[0-2][0-9])\\.(10|11|12|0[0-9])\\.20[0-9]{2}$/uim", $string) === 1) {
            $date = \DateTime::createFromFormat('d.m.Y', $string);
        }
        //check for errors
        $errors = \DateTime::getLastErrors();
        if ($errors['warning_count'] > 0 || $errors['error_count'] > 0) {
            $date = null;
        }

        return $date instanceof \DateTime;
    }
}
