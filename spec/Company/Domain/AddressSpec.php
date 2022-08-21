<?php

declare(strict_types=1);

namespace spec\App\Company\Domain;

use App\Company\Domain\Address;
use PhpSpec\ObjectBehavior;

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
}
