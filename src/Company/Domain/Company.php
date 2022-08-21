<?php

declare(strict_types=1);

namespace App\Company\Domain;

use App\Core\CompanyId;
use App\Core\TaxIdNumber;

class Company
{
    public function __construct(
        private readonly CompanyId $id,
        private readonly TaxIdNumber $taxIdNumber,
        private readonly string $name,
        private readonly Address $address
    ) { }
}
