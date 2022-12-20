<?php

namespace App\Http\Controllers\API;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function all()
    {
        $posts = Post::all();
        return response()->json([
            "status" => true,
            "message" => "",
            "data" => $posts
        ]);
    }

    public function detail($id)
    {
        $post = Post::find($id);

        if (!isset($post)) {
            return response()->json([
                "status" => false,
                "message" => "Post tidak ditemukan",
                "data" => null
            ]);
        }

        return response()->json([
            "status" => true,
            "message" => "",
            "data" => $post
        ]);
    }
}
