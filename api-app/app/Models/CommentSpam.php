<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentSpam extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = ['comment_id','user_id'];

    /**
     * @var string
     */
    protected $table = "comment_spam";
}
