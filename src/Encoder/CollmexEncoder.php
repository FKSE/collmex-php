<?php
namespace FKSE\Collmex\Encoder;

use FKSE\Collmex\Encoder\Exception\EncodingException;
use FKSE\Collmex\TypeResolver;
use Symfony\Component\Yaml\Yaml;

/**
 * Class CollmexEncoder
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class CollmexEncoder
{
    /**
     * @var Yaml
     */
    private $yaml;

    /**
     * @var string
     */
    private $baseDir;

    /**
     * @param string $baseDir
     */
    public function __construct($baseDir)
    {
        $this->yaml = new Yaml();
        $this->baseDir = realpath($baseDir).'/';
    }


    public function encode($object)
    {
        $type = TypeResolver::toCollmex(get_class($object));
        if ($type === null) {
            throw new EncodingException('Unable to resolve type for class '.get_class($object));
        }
        //get filename
        $config = $this->yaml->parse($this->baseDir.strtolower($type).'.yml');

        //var_dump($config);

        //create reflection class
        $reflect = new \ReflectionClass($object);

        //var_dump($reflect->getProperties());
    }
}
