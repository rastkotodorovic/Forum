<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit()
    {
        return view('profile.edit');
    }

    public function update(Request $request)
    {
          $validated = request()->validate([
            'name' => 'required',
            'avatar' => 'file|required',
        ]);

        Auth::user()->update($validated);

        return redirect(route('threads.index'));
    }
}
