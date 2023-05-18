<?php

namespace App\DTO\Profile;

use App\DTO\Abstract\Data;

class Photo extends Data
{
    public int $id;
    public ?string $alt;
    public ?string $title;
    public string $path;
    public ?string $created_at;
    public ?string $updated_at;
}
