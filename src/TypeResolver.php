<?php
namespace FKSE\Collmex;

/**
 * Resolves between Collmex and FKSE\Collmex\Model
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class TypeResolver
{
    /**
     * @param string $class
     *
     * @return string|null
     */
    public static function toCollmex($class)
    {
        $map = [
            //auth
            'FKSE\Collmex\Model\Auth' => 'LOGIN',
            //model/query
            'FKSE\Collmex\Model\Query\AccountingDocument' => 'ACCDOC_GET',
            //model
            'FKSE\Collmex\Model\AccountingDocument' => 'ACCDOC'
        ];

        return isset($map[$class]) ? $map[$class] : null;
    }

    /**
     * Get the model class from Collmex record type. The inverse function of toCollmex()
     *
     * @param string $recordType
     *
     * @return null
     */
    public static function toModel($recordType)
    {
        $map = [
            'LOGIN' => 'FKSE\Collmex\Model\Auth'
        ];

        return isset($map[$recordType]) ? $map[$recordType] : null;
    }
}
