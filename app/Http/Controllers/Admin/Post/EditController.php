<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class EditController extends Controller
{
    public function __invoke(Post $post){

        $posts = Post::all();
        return view('admin.category.edit', compact('posts'));
    }
}
