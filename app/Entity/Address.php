<?php
declare(strict_types=1);

namespace App\Entity;

class Address
{
    private string $street;
    private string $number;
    private string $state;
    private string $complement;
    private string $zipCode;

    /**
     * @param string $street
     * @param string $number
     * @param string $state
     * @param string|null $complement
     * @param string $zipCode
     */
    public function __construct(string $street, string $number, string $state, string $complement = null, string $zipCode)
    {
        $this->street = $street;
        $this->number = $number;
        $this->state = $state;
        $this->complement = $complement;
        $this->zipCode = $zipCode;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getComplement(): string
    {
        return $this->complement;
    }

    public function getZipCode(): string
    {
        return $this->zipCode;
    }

public function __toString(): string
{
    return "Rua: $this->street, Nº $this->number, $this->complement, $this->state - $this->zipCode";
}

}