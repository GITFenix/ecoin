<?php

declare(strict_types=1);

namespace App\Core;

use Symfony\Component\Uid\UuidV4;

class CompanyId extends UuidV4
{
    public static function generate(): CompanyId
    {
        return new CompanyId((string) self::v4());
    }
}
