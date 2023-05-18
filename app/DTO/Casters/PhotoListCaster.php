<?php

namespace App\DTO\Casters;

use App\DTO\Profile\Photo;
use Spatie\DataTransferObject\Caster;

class PhotoListCaster implements Caster
{
    public function cast(mixed $value): mixed
    {
        return array_map(
            fn(array $data) => new Photo(...$data),
            $value
        );
    }
}
