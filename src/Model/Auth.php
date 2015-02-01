<?php
namespace FKSE\Collmex\Model;

/**
 * Used internal.
 *
 * @author Fridolin Koch <info@fridokoch.de>
 * @internal
 */
class Auth extends BaseModel
{
    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $password;

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     *
     * @return Auth
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return Auth
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}
