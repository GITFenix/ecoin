<?php

declare(strict_types=1);

namespace spec\App\Core;

use App\Core\TaxIdNumber;
use InvalidArgumentException;
use PhpSpec\ObjectBehavior;

class TaxIdNumberSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(TaxIdNumber::class);
    }

    function it_should_allow_creating_object_from_10_characters(): void
    {
        $this->beConstructedThrough('fromString', ['5932431356']);
    }

    function it_should_throw_exception_if_less_characters_are_given(): void
    {
        $this->beConstructedThrough('fromString', ['932431356']);
        $this->shouldThrow(InvalidArgumentException::class)->duringInstantiation();
    }

    function it_should_throw_exception_if_more_characters_are_given(): void
    {
        $this->beConstructedThrough('fromString', ['59324313560']);
        $this->shouldThrow(InvalidArgumentException::class)->duringInstantiation();
    }
}
