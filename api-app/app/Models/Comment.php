<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
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
    public function replies()
    {
        return $this->hasMany(Comment::class, 'commentable_id')
            ->where('commentable_type', 'comment')
            ->with('user', function($query) {
                $query->select('id', 'name');
            })
            ->orderBy('id', 'desc')
            ->with('replies')
            ->where('parent_id', '!=', '0');

    }
}
