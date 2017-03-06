<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

	/**
     * @Assert\Regex(
     *  pattern="/(?=.*[A-Z])(?=.*[-+!*$@%_!\?.;:,])(?=.*[a-z])(?=.*[0-9]).{12,}/",
     *  message="Votre mot de passe doit contenir au moins : douze caractères, un chiffre, un caractère spécial de cette liste -+!*$@%_!?.;:, une majuscule et une minuscule."
     * )
     */
    protected $plainPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=128, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=128, nullable=true)
     */
    private $lastname;
	
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
	
	public function setEmail($email)
	{
		$email = is_null($email) ? '' : $email;
		parent::setEmail($email);
		$this->setUsername($email);

		return $this;
	}
	

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }
}
