<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $id
 * @property int $photo_id
 * @property int $albums_id
 * @property string $created_at
 * @property string $updated_at
 */
class PhotosAlbums extends Model
{

    protected $fillable = [
        'id',
        'photo_id',
        'album_id',
        'updated_at',
        'created_at',
    ];
}
