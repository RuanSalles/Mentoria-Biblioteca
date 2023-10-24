<?php

namespace App\Entity;

class Person
{
    private string $name;
    private string $document;
    private Address $address;

    /**
     * @param string $name
     * @param string $document
     * @param Address $address
     */
    public function __construct(string $name, string $document, Address $address)
    {
        $this->name = $name;
        $this->document = $document;
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDocument(): string
    {
        return $this->document;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function Person()
    {
        return [
            $this->name,
            $this->address,
            $this->document
        ];
    }

    public function __toString(): string
    {
        return trim("<strong>$this->name</strong>, com o documento $this->document<br>Com endereço em: $this->address");
    }
}