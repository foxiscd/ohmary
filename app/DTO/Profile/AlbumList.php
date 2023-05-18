<?php

namespace App\DTO\Profile;

use App\DTO\Abstract\Data;
use App\DTO\Abstract\DataList;
use App\DTO\Casters\AlbumListCaster;
use App\DTO\Casters\PhotoListCaster;
use App\Models\Profile\Album;
use Spatie\DataTransferObject\Attributes\CastWith;

class AlbumList extends DataList
{
    /**
     * @var Photo[]
     */
    #[CastWith(AlbumListCaster::class)]
    public array $data;
}
