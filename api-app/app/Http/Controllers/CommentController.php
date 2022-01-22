<?php
/**
 * @group  Comments
 *
 * This is comment controller class
 */

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
     * Store Comment
     *
     * To store comment of post you can use this store function
     *
     * @urlParam post_id integer required The ID of the post
     * @bodyParam comment string required The comment body
     *
     * @param Request $request
     * @param integer $postId required
     * @return JsonResponse
     * @throws ValidationException
     *
     */
    public function store(Request $request, int $postId): JsonResponse
    {

        $this->validate($request, [
            'comment' => 'required',
        ]);

        $user = User::find($request->userId);

        if (!$user) {
            return response()->json([
                'error' => true,
                'message' => 'User not found',
                'data' => null
            ], 404);
        }

        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->commentable_id = $request->postId;
        $comment->commentable_type = 'post';
        $comment->parent_id = 0;
        $comment->user()->associate($user);

        $post = Post::find($postId);

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
            'message' => 'Your comment successfully posted!',
            'comment' => $comment
        ], 201);
    }

    /**
     * Store Reply
     *
     * To store comment of post you can use this store function
     *
     * @urlParam post_id integer required The ID of the post
     * @bodyParam comment string required The comment body
     * @bodyParam comment_id integer required The ID of parent comment
     *
     * @param Request $request
     * @param int $postId
     * @return JsonResponse
     * @throws ValidationException
     */
    public function replyStore(Request $request, int $postId): JsonResponse
    {
        $this->validate($request, [
            'comment' => 'required',
            'comment_id' => 'required'
        ]);

        $user = User::find($request->userId);

        if (!$user) {
            return response()->json([
                'error' => true,
                'message' => 'User not found',
                'data' => null
            ], 404);
        }

        $reply = new Comment();
        $reply->comment = $request->comment;
        $reply->commentable_id = $request->comment_id;
        $reply->commentable_type = 'comment';
        $reply->parent_id = $request->comment_id;
        $reply->user()->associate($user);

        $comment = Comment::find($request->comment_id);

        if (!$comment) {
            return response()->json([
                'error' => true,
                'message' => 'Comment not found',
                'data' => null
            ], 404);
        }

        $comment->replies()->save($reply);

        return response()->json([
            'error' => false,
            'message' => 'Your comment successfully posted!',
            'comment' => $reply
        ], 201);

    }


    /**
     * Get Comments
     *
     * To get comments of a post
     *
     * @usrlParam post_id integer The ID of the post
     * @response 201 {
     *  "error": false,
     *  "message":  "Comments fetched successfully!",
     *  "comments": [
     *      {
     *      "id": 69,
     *      "user_id": 1,
     *      "parent_id": 0,
     *      "comment": "Is this post 1?",
     *      "commentable_id": 1,
     *      "commentable_type": "post",
     *      "created_at": "2022-01-22T18:32:16.000000Z",
     *      "updated_at": "2022-01-22T18:32:16.000000Z",
     *      "replies": [
     *          ...
     *      ],
     *      "user": {
     *      "id": 1,
     *      "name": "nima"
     *          }
     *      }
     *  ],
     *  ...
     * }
     * @param int $postId
     * @return JsonResponse
     */
    public function getComments(int $postId): JsonResponse
    {
        $post = Post::find($postId);

        if (!$post) {
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
