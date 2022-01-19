<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CommentController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        $this->validate($request, [
            'comment' => 'required',
        ]);

        $comment = new Comment();
        $comment->user()->associate($request->user());

        $post = Post::find($request->post_id);

        if (!$post) {
            return response()->json([
                'error' => true,
                'message' => 'Post not found',
                'data' => null
            ], 404);
        }
        $post->comments()->save($comment);

        return response()->json([
            'error' => false,
            'message' => 'Your cooment successfully posted!',
            'data' => $comment
        ], 201);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function replyStore(Request $request): JsonResponse
    {
        $this->validate($request, [
            'comment' => 'required'
        ]);

        $reply = new Comment();
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->comment_id;

        $post = Post::find($request->parent_id);

        if (!$post) {
            return response()->json([
                'error' => true,
                'message' => 'Post not found',
                'data' => null
            ], 404);
        }

        $post->comment()->save($reply);

        return response()->json([
            'error' => false,
            'message' => 'Your comment successfully posted!',
            'data' => $reply
        ], 201);

    }


    public function getComments(int $postId)
    {
        $post = Post::find($postId);

        if(!$post) {
            return response()->json([
                'error' => true,
                'message' => 'Post not found',
                'data' => null
            ], 404);
        }

        return response()->json([
            'error' => false,
            'message' => 'Comments fetched successfully!',
            'comments' => $post->comments()->get()
        ], 201);

    }

}
