<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View;

class PostController extends Controller
{
    public function create(): View
    {
        return view('post.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $post = '';

        return to_route('post.show', ['post' => $post->id]);
    }
}