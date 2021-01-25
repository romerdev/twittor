<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{

    public function index(User $user)
    {
        return view('profiles.index', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'name' => ['required', 'string', 'max:50'],
            'description' => ['max:160', 'nullable'],
            'url' => ['max:100', 'url', 'nullable'],
            'image' => '',
        ]);

        auth()->user()->profile->user->update([
            'name' => $data['name'],
        ]);

        if(request()->has('description')) {
            auth()->user()->profile->update([
                'description' => $data['description'],
            ]);
        }

        if(request()->has('url')) {
            auth()->user()->profile->update([
                'url' => $data['url'],
            ]);
        }

        return redirect("/profile/{$user->id}");

    }
}
