<?php
namespace FKSE\Collmex\Request;

use FKSE\Collmex\Exception\DataTooLongForFieldException;
use FKSE\Collmex\Exception\InvalidFieldException;
use FKSE\Collmex\Exception\InvalidTypeException;
use FKSE\Utilities\StringUtil;

/**
 * Class AbstractRequest
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
abstract class AbstractRequest
{
    const TYPE_DATETIME = 'datetime';

    const TYPE_INT = 'int';

    const TYPE_STRING = 'string';

    const TYPE_FLOAT = 'float';

    /**
     * @var array
     */
    protected $fields;

    /**
     * @return string
     */
    abstract public function getRecordType();

    /**
     * @param string $name
     *
     * @return mixed
     * @throws \FKSE\Collmex\Exception\InvalidFieldException
     */
    protected function getField($name)
    {
        if (!array_key_exists($name, $this->fields)) {
            throw new InvalidFieldException($name, $this->getRecordType());
        }

        return $this->fields[$name];
    }

    /**
     * @param string $name
     * @param mixed  $value
     * @param string $dataType
     * @param int    $maxLength
     *
     * @throws \FKSE\Collmex\Exception\InvalidTypeException
     * @throws \FKSE\Collmex\Exception\DataTooLongForFieldException
     * @throws \FKSE\Collmex\Exception\InvalidFieldException
     */
    protected function setField($name, $value, $dataType = self::TYPE_STRING, $maxLength = 0)
    {
        if (!array_key_exists($name, $this->fields)) {
            throw new InvalidFieldException($name, $this->getRecordType());
        }
        //get actual length
        $actualLength = strlen(strval($value));

        switch ($dataType) {
            case self::TYPE_DATETIME:
                if (!($value instanceof \DateTime)) {
                    throw new InvalidTypeException(null, null, null, 'DateTime', gettype($value));
                }
                $maxLength = -1;
                break;

            case self::TYPE_INT:
                if (!is_int($value)) {
                    throw new InvalidTypeException(null, null, null, 'int', gettype($value));
                }
                break;

            case self::TYPE_STRING:
                if (!is_string($value)) {
                    throw new InvalidTypeException(null, null, null, 'string', gettype($value));
                }
                break;

            case self::TYPE_FLOAT:
                if (!is_float($value)) {
                    throw new InvalidTypeException(null, null, null, 'float', gettype($value));
                }
                break;
        }
        //check length if $maxLength is valid
        if ($maxLength > 0 && $actualLength > $maxLength) {
            throw new DataTooLongForFieldException(null, null, null, $name, $maxLength);
        }
        //set value
        $this->fields[$name] = $value;
    }
}
