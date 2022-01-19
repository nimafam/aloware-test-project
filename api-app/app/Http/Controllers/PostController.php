<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * @param int $id
     * @return JsonResponse|null
     */
    public function show(int $id): ?JsonResponse
    {

        $post = Post::find($id);

        if (!$post) {
            return response()->json([
                'error' => true,
                'message' => 'Post not found',
                'post' => null
            ], 404);
        }

        return response()->json([
            'error' => false,
            'message' => 'The post has been fetched successfully!',
            'post' => $post
        ], 201);
    }
}
