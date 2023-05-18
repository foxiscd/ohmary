<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $alt
 * @property string $title
 * @property string $path
 * @property string $created_at
 * @property string $updated_at
 */
class Photo extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'alt',
        'title',
        'path',
        'updated_at',
        'created_at',
    ];

    public function album()
    {
        return $this->hasOne(Album::class, 'cover_photo_id', 'id');
    }
}
