<?php

namespace App\DTO\Casters;

use App\DTO\Profile\Album;
use Spatie\DataTransferObject\Caster;

class AlbumListCaster implements Caster
{
    public function cast(mixed $value): mixed
    {
        return array_map(
            fn(array $data) => new Album(...$data),
            $value
        );
    }
}
