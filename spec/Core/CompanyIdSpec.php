<?php

declare(strict_types=1);

namespace spec\App\Core;

use App\Core\CompanyId;
use PhpSpec\ObjectBehavior;
use Symfony\Component\Uid\UuidV4;

class CompanyIdSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->beConstructedThrough('generate');
        $this->shouldHaveType(CompanyId::class);
        $this->shouldHaveType(UuidV4::class);
    }

    function it_checks_if_it_is_equal(): void
    {
        $this->beConstructedThrough('fromString', ['5aff376b-ee0d-44c4-b6fe-a49edc514d24']);
        $this->equals(CompanyId::fromString('5aff376b-ee0d-44c4-b6fe-a49edc514d24'))->shouldReturn(true);
    }

    function it_checks_if_not_equal(): void
    {
        $this->beConstructedThrough('fromString', ['5aff376b-ee0d-44c4-b6fe-a49edc514d24']);
        $this->equals(CompanyId::fromString('113a238a-74b8-4a29-b41c-b9811738d2c7'))->shouldReturn(false);
    }
}
