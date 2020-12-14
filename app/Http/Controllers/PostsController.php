<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'text' => ['required', 'string', 'max:280'],
            'image' => 'image',
        ]);

        auth()->user()->posts()->create($data);

        dd(request()->all());
    }

}
