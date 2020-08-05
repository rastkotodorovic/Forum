<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class ThreadsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        $threads = Thread::latest()->get();

        return view('index', [
            'threads' => $threads,
        ]);
    }

    public function show(Thread $thread)
    {
        return view('show', [
            'thread' => $thread,
            'threads' => Thread::latest()->paginate(5),
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Thread::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect(route('threads.index'));
    }
}
