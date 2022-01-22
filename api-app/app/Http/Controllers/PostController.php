<?php


namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @gruop Articles
 *
 * The Article class
 *
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController extends Controller
{
    /**
     * List Articles
     *
     * to Get Articles
     *
     * @response 201 {
     *   "error": false,
     *   "message": "Articles fetched successfully!",
     *   "blogs": [
     *   {
     *   "id": 1,
     *   "title": "The Basics Of Bird Migration\n",
     *   "slug": "The Basics Of Bird Migration\n",
     *   "content": "        <p class=\"text-justify\">\n          Geese winging their way south in wrinkled V-shaped flocks is perhaps the classic picture of\n          migration—the annual, large-scale movement of birds between their breeding (summer) homes and their\n          nonbreeding (winter) grounds. But geese are far from our only migratory birds. Of the more than 650\n          species of North American breeding birds, more than half are migratory.\n        </p>\n        <div class=\"text-h6 text-weight-medium\">Why Do Birds Migrate?</div>\n        <p class=\"text-justify\">\n          Birds migrate to move from areas of low or decreasing resources to areas of high or increasing\n          resources. The two primary resources being sought are food and nesting locations. Here’s more about\n          how migration evolved.\n\n          Birds that nest in the Northern Hemisphere tend to migrate northward in the spring to take advantage\n          of burgeoning insect populations, budding plants and an abundance of nesting locations. As winter\n          approaches and the availability of insects and other food drops, the birds move south again.\n          Escaping the cold is a motivating factor but many species, including hummingbirds, can withstand\n          freezing temperatures as long as an adequate supply of food is available.\n        </p>\n        <div class=\"text-h6 text-weight-medium\">Origins Of Long-Distance Migration</div>\n        <p class=\"text-justify\">\n          While short-distance migration probably developed from a fairly simple need for food, the origins of\n          long-distant migration patterns are much more complex. They’ve evolved over thousands of years and\n          are controlled at least partially by the genetic makeup of the birds. They also incorporate\n          responses to weather, geography, food sources, day length, and other factors.\n        </p>\n        <p class=\"text-justify\">\n          For birds that winter in the tropics, it seems strange to imagine leaving home and embarking on a\n          migration north. Why make such an arduous trip north in spring? One idea is that through many\n          generations the tropical ancestors of these birds dispersed from their tropical breeding sites\n          northward. The seasonal abundance of insect food and greater day length allowed them to raise more\n          young (4–6 on average) than their stay-at-home tropical relatives (2–3 on average). As their\n          breeding zones moved north during periods of glacial retreat, the birds continued to return to their\n          tropical homes as winter weather and declining food supplies made life more difficult. Supporting\n          this theory is the fact that most North American vireos, flycatchers, tanagers, warblers, orioles,\n          and swallows have evolved from forms that originated in the tropics.\n        </p>",
     *   "cover": "andy-li-r2AlgxMb-yc-unsplash.jpg",
     *   "likes": 0,
     *   "views": 0,
     *   "created_at": null,
     *   "updated_at": null
     *   },
     *  ...
     *  ]
     * }
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'error' => false,
            'message' => 'Articles fetched successfully!',
            'blogs' => Post::all()
        ]);
    }

    /**
     * Get Post
     *
     * to get post
     *
     * @usrlParam post_id integer required The ID of the post
     *
     *      * @response 201 {
     *   "error": false,
     *   "message": "Articles fetched successfully!",
     *   "blog":
     *   {
     *   "id": 1,
     *   "title": "The Basics Of Bird Migration\n",
     *   "slug": "The Basics Of Bird Migration\n",
     *   "content": "        <p class=\"text-justify\">\n          Geese winging their way south in wrinkled V-shaped flocks is perhaps the classic picture of\n          migration—the annual, large-scale movement of birds between their breeding (summer) homes and their\n          nonbreeding (winter) grounds. But geese are far from our only migratory birds. Of the more than 650\n          species of North American breeding birds, more than half are migratory.\n        </p>\n        <div class=\"text-h6 text-weight-medium\">Why Do Birds Migrate?</div>\n        <p class=\"text-justify\">\n          Birds migrate to move from areas of low or decreasing resources to areas of high or increasing\n          resources. The two primary resources being sought are food and nesting locations. Here’s more about\n          how migration evolved.\n\n          Birds that nest in the Northern Hemisphere tend to migrate northward in the spring to take advantage\n          of burgeoning insect populations, budding plants and an abundance of nesting locations. As winter\n          approaches and the availability of insects and other food drops, the birds move south again.\n          Escaping the cold is a motivating factor but many species, including hummingbirds, can withstand\n          freezing temperatures as long as an adequate supply of food is available.\n        </p>\n        <div class=\"text-h6 text-weight-medium\">Origins Of Long-Distance Migration</div>\n        <p class=\"text-justify\">\n          While short-distance migration probably developed from a fairly simple need for food, the origins of\n          long-distant migration patterns are much more complex. They’ve evolved over thousands of years and\n          are controlled at least partially by the genetic makeup of the birds. They also incorporate\n          responses to weather, geography, food sources, day length, and other factors.\n        </p>\n        <p class=\"text-justify\">\n          For birds that winter in the tropics, it seems strange to imagine leaving home and embarking on a\n          migration north. Why make such an arduous trip north in spring? One idea is that through many\n          generations the tropical ancestors of these birds dispersed from their tropical breeding sites\n          northward. The seasonal abundance of insect food and greater day length allowed them to raise more\n          young (4–6 on average) than their stay-at-home tropical relatives (2–3 on average). As their\n          breeding zones moved north during periods of glacial retreat, the birds continued to return to their\n          tropical homes as winter weather and declining food supplies made life more difficult. Supporting\n          this theory is the fact that most North American vireos, flycatchers, tanagers, warblers, orioles,\n          and swallows have evolved from forms that originated in the tropics.\n        </p>",
     *   "cover": "andy-li-r2AlgxMb-yc-unsplash.jpg",
     *   "likes": 0,
     *   "views": 0,
     *   "created_at": null,
     *   "updated_at": null
     *   }
     * }
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
            'blog' => $post
        ], 201);
    }
}
