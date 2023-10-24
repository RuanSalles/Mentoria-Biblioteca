<?php
declare(strict_types=1);
namespace App\Entity;

/**
 *
 */
class User extends Person
{
    /**
     * @var string
     */
    private string $username;
    /**
     * @var string
     */
    private string $email;

    private string $password;

    /**
     * @param string $username
     * @param string $email
     * @param $name
     * @param $document
     * @param Address $address
     */
    public function __construct(string $username, string $email, string $password, string $name, string $document, Address $address)
    {
        parent::__construct($name, $document, $address);
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }

    public function __toString(): string
    {
        return "O usuário <strong>$this->username</strong>, possui o email: $this->email" . "<br>" . "Com as informações pessoais: " .  parent::__toString();
    }


}