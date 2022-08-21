<?php

declare(strict_types=1);

namespace App\Core;

use InvalidArgumentException;

class TaxIdNumber
{
    private function __construct(private readonly string $taxIdNumber) {}

    public static function fromString(string $taxIdNumber): TaxIdNumber
    {
        self::isValid($taxIdNumber);

        return new self($taxIdNumber);
    }

    public function __toString(): string
    {
        return $this->value();
    }

    public function value(): string
    {
        return $this->taxIdNumber;
    }

    private static function isValid(string $taxIdNumber): bool
    {
        if (strlen($taxIdNumber) !== 10) {
            throw new InvalidArgumentException();
        }

        return true;
    }
}
