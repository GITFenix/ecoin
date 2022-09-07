<?php

declare(strict_types=1);

namespace spec\App\Company\Domain;

use App\Company\Domain\Address;
use InvalidArgumentException;
use PhpSpec\ObjectBehavior;
use Throwable;

class AddressSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->beConstructedWith(
            'ul. Poziomkowa 55a/2',
            '83-110',
            'Tczew'
        );
        $this->shouldHaveType(Address::class);
    }

    function it_could_be_constructed_fromArray(): void
    {
        $address = [
            'street' => 'ul. Poziomkowa 55a/2',
            'postalCode' => '83-110',
            'city' => 'Tczew',
        ];

        $this->beConstructedThrough('fromArray', [$address]);
        $this->shouldNotThrow(Throwable::class)->duringInstantiation();
    }

    function it_should_throw_exception_if_array_shape_is_wrong(): void
    {
        $address = [
            'street' => 'ul. Poziomkowa 55a/2',
            'postalCode' => '83-110',
            'cityyy' => 'Tczew',
        ];

        $this->beConstructedThrough('fromArray', [$address]);
        $this->shouldThrow(InvalidArgumentException::class)->duringInstantiation();
    }
}
