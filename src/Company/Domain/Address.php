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
