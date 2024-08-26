<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $p)
    {
        // $test = $post->get();
        // dd($test);
        // return view('posts.index')->with(['po' => $p->orderBy('updated_at', 'DESC')->limit(2)->get()]);
        // return view('posts.index')->with(['po' => $p->getByLimit(2)]);
        return view('posts.index')->with(['po' => $p->getPaginateByLimit(1)]);
    }
}
?>