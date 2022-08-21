<?php

declare(strict_types=1);

namespace spec\App\Company\Domain;

use App\Company\Domain\Address;
use App\Company\Domain\Company;
use App\Core\CompanyId;
use App\Core\TaxIdNumber;
use PhpSpec\ObjectBehavior;

class CompanySpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->beConstructedWith(
            CompanyId::fromString('113a238a-74b8-4a29-b41c-b9811738d2c7'),
            TaxIdNumber::fromString('5932431356'),
            'Fenix - Tomasz Strzelecki',
            new Address(
                'ul. Poziomkowa 55a/2',
                '83-110',
                'Tczew'
            ),
        );

        $this->shouldHaveType(Company::class);
    }
}
