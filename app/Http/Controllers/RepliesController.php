<?php

namespace App\Http\Controllers;

use App\Reply;
use App\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RepliesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store($categoryId, Thread $thread)
    {
        Reply::create([
            'user_id' => auth()->id(),
            'thread_id' => $thread->id,
            'body' => request('body'),
        ]);

        Session::flash('success', 'You have successfully added a reply!');

        $thread->increment('replies');

        return back();
    }

    public function update(Reply $reply)
    {
        $reply->update(['body' => request('body')]);
    }

    public function destroy(Reply $reply, Thread $thread)
    {
        $this->authorize('delete', $reply);

        $reply->delete();

        $reply->thread->decrement('replies');

        if (request()->expectsJson()) {
            return response(['status' => 'Deleted']);
        }

        return back();
    }
}
