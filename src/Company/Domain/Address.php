<?php

declare(strict_types=1);

namespace App\Company\Domain;

use JsonSerializable;

class Address implements JsonSerializable
{
    public function __construct(
        private readonly string $street,
        private readonly string $postalCode,
        private readonly string $city
    ) { }

    public static function fromArray(array $address): self
    {
        self::isValid($address);

        return new self($address['street'], $address['postalCode'], $address['city']);
    }

    private static function isValid(array $address): void
    {
        $validKeys = array_flip(['street', 'postalCode', 'city']);

        if (array_diff_key($validKeys, $address)) {
            throw new \InvalidArgumentException();
        }
    }

    /**
     * @return array{
     *     street:string,
     *     postalCode: string,
     *     city: string
     * }
     */
    public function toArray(): array
    {
        return [
            'street' => $this->street,
            'postalCode' => $this->postalCode,
            'city' => $this->city,
        ];
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
