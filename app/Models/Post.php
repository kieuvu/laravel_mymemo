<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use CloudinaryLabs\CloudinaryLaravel\MediaAlly;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use ElasticScoutDriverPlus\Searchable;


class Post extends Model
{
    use Searchable;
    use MediaAlly;
    use HasFactory;
    protected $fillable = ['title', 'slug', 'author', 'image_link', 'status'];

    protected $mapping = [
        'properties' => [
            'title' => [
                'type' => 'text'
            ],
        ]
    ];

    public function toSearchableArray()
    {
        $array = [
            'title' => $this->title,
        ];

        return $array;
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
    }
}
