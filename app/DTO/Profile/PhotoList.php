<?php

namespace App\DTO\Profile;

use App\DTO\Abstract\Data;
use App\DTO\Abstract\DataList;
use App\DTO\Casters\PhotoListCaster;
use Spatie\DataTransferObject\Attributes\CastWith;

class PhotoList extends DataList
{
    /**
     * @var Photo[]
     */
    #[CastWith(PhotoListCaster::class)]
    public array $data;
}
