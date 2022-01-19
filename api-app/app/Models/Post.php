<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Post extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'commentable_id', 'id')
            ->where('commentable_type', 'post')
            ->where('parent_id', 0)
            ->with('replies')
            ->with('user', function($query) {
                $query->select('id', 'name');
            });
    }

}
