<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $id
 * @property string $name
 * @property int $cover_photo_id
 * @property string $created_at
 * @property string $updated_at
 */
class Album extends Model
{

    protected $fillable = [
        'id',
        'name',
        'cover_photo_id',
        'updated_at',
        'created_at',
    ];

    public function photo()
    {
       return $this->belongsTo(Photo::class,'cover_photo_id');
    }
    public function photos()
    {
       return $this->belongsToMany(Photo::class,'photos_albums');
    }
}
