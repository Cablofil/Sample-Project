<?php

namespace App\Models\Post;

use App\Enums\PostSourceEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'text',
        'author_id',
        'source',
        'likes',
        'dislikes',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'source' => PostSourceEnum::class,
    ];
}
