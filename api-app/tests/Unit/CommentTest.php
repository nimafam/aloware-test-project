<?php

namespace Tests\Unit;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Tests\TestCase;

class CommentTest extends TestCase
{

    /**testGetComments
     * test Get Comments
     */
    public function testGetComments(): void
    {
        $comment = Comment::factory()->create();


        $comments = $this->get(route('comments.show', ['post' => $comment->commentable_id]));

        $comments->assertStatus(201);
    }

    /**
     * test Get No Comments When Have Wrong Id
     */
    public function testGetNoCommentsWhenPutWrongId(): void
    {
        $postId = random_int(1000, 9999);

        $comments = $this->get(route('comments.show', ['post' => $postId]));

        $comments->assertStatus(404);
        $comments->assertJson([
            "error" => true,
            "message" => "Post not found",
            "data" => null
        ]);
    }

    /**
     * test Get No Comments When Have String For Id
     */
    public function testGetNoCommentsWhenHaveStringForId(): void
    {
        $postId = Str::random(3);

        $comments = $this->get(route('comments.show', ['post' => $postId]));

        $comments->assertStatus(500);
    }

    /**
     * test Store Comment
     */
    public function testStoreComment(): void
    {

        $postId = Post::factory()->create()->id;

        $comment = $this->post(route('comment.add', ['post' => $postId]), [
            'userId' => User::factory()->create()->id,
            'commentable_id' => $postId,
            'commentable_type' => 'post',
            'comment' => 'This is a test comment.'
        ]);

        $comment->assertStatus(201);
    }

    /**
     * test Store Reply
     */
    public function testStoreReply(): void
    {

        $comment = Comment::factory()->create();

        $response = $this->post(route('comment.add', ['post' => $comment->commentable_id]), [
            'userId' => User::factory()->create()->id,
            'comment_id' => $comment->commentable_id,
            'comment' => 'This is a test reply.'
        ]);

        $response->assertStatus(201);
    }


}
