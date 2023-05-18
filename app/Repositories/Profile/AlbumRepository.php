<?php

namespace App\Repositories\Profile;

use App\DTO\Profile\AlbumList;
use App\Models\Profile\Album;
use App\Repositories\Repository;

class AlbumRepository extends Repository
{
    public function getListWithPhotosPaginate($paginateCount = 15): AlbumList
    {
        return new AlbumList(data: Album::with(['photos'])->paginate($paginateCount));
    }
}
