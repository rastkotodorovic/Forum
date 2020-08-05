<?php

namespace App\Http\Controllers;

use App\Reply;
use App\Thread;
use Illuminate\Http\Request;

class RepliesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Thread $thread)
    {
        Reply::create([
            'user_id' => auth()->id(),
            'thread_id' => $thread->id,
            'body' => request('body'),
        ]);

        return back();
    }
}
