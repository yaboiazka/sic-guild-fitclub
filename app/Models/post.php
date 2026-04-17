<?php

namespace App\Models;

use App\Enums\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'picture',
        'description',
        'content',
        'draft_status',
        'approval',
        'category',
    ];
    protected $casts = [
        'category' => Category::class, // Casting ke Enum
    ];

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes', 'post_id', 'user_id')->withTimestamps();
    }

    public function savers()
    {
        return $this->belongsToMany(User::class, 'saves', 'post_id', 'user_id')->withTimestamps();
    }
}
