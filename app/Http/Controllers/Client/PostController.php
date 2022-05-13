<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Services\PostServices;

class PostController extends Controller
{
    public function index()
    {
        return view('pages.client.post.index');
    }

    public function showCreateForm()
    {
        return view('pages.client.post.create');
    }

    public function createPost(Request $request)
    {
        $tags   = json_decode($request->tags);
        $title  = $request->title;
        $file   = $request->file('image');
        $status = ($request->hidden) ? 0 : 1;
        $author = Auth::user()->name;
        $slug   = Carbon::now()->format('s') . Str::random(10);

        $post         = new Post();
        $post->title  = $title;
        $post->slug   = $slug;
        $post->author = $author;
        $post->status = $status;
        $post->save();

        PostServices::updateImage($post, $file);
        PostServices::updateTags($post, $tags);
    }
}
