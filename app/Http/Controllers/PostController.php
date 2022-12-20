<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
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

        if ($blog == null) {
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
