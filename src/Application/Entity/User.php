<?php

/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 01/07/16
 * Time: 15:59
 */

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class User
 * @package Application
 * @ORM\Entity(repositoryClass="UserRepository")
 * @ORM\Table(name="user", schema="silex")
 */
class User
{
    /**
     * @ORM\Id @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    protected $id;
    /**
     * @ORM\Column(type="datetime")
     * @var \Datetime
     */
    protected $created;
    /**
     * @ORM\Column(name="updated", type="datetime")
     * @var \Datetime
     */
    protected $updated;
    /**
     * @ORM\Column(name="username", type="string", length=80)
     * @var string
     */
    private $name;
    /**
     * @ORM\Column(name="email", type="string", length=80, unique=true)
     * @var string
     */
    private $email;
    /**
     * @ORM\Column(name="password", type="string", length=50)
     * @var string
     */
    private $password;

    /**
     * @ORM\Column(name="active", type="smallint")
     *
     * @var int
     */
    private $active;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        return $this->name = filter_var($name, FILTER_SANITIZE_STRING);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        if (FALSE === filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('INVALID EMAIL');
        }
        return $this->email = $email;
    }
    
    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    public function getCreated()
    {
        return $this->created->format('Y-m-d H:i:s');
    }

    public function setCreated(\DateTime $created)
    {
        $this->created = $created;
    }
    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = \DateTime::createFromFormat('Y-m-d H:i:s', $updated);
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
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param int $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @Assert\IsTrue(message="The password cannot match your username", groups={"Strict"})
     */
    public function isPasswordLegal()
    {
        return ($this->name !== $this->password);
    }
}