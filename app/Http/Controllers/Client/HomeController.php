<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $per_page = 25;

        $recent_posts = Post::orderBy('created_at', 'desc')
            ->where('status', 1)
            ->with('tags')
            ->with('user')
            ->paginate($per_page);

        return view('pages.client.home', ['recent_posts' => $recent_posts]);
    }
}
