<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentVote extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = ['comment_id','user_id','vote'];

    /**
     * @var string
     */
    protected $table = "comment_user_vote";

}
