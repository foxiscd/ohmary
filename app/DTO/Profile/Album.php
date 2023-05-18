<?php

namespace App\DTO\Profile;

use App\DTO\Abstract\Data;
use App\DTO\Casters\PhotoListCaster;

class Album extends Data
{
    public int $id;
    public string $name;
    public ?string $cover_photo_id;
    public string $created_at;
    public string $updated_at;

    /**
     * @var Photo[]
     */
    #[CastWith(PhotoListCaster::class)]
    public ?array $photos;
}
