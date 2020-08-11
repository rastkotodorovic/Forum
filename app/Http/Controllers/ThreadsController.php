<?php

namespace App\Http\Controllers;

use App\Thread;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class ThreadsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index(Category $category, User $user)
    {
        if ($category->exists) {
            $threads = $category->thread()->latest();
        } else {
            $threads = Thread::latest();
        }

        if ($username = request('by')) {
            $user = User::where('name', $username)->first();
            $threads->where('user_id', $user->id);
        }

        $threads = $threads->get();

        return view('index', [
            'threads' => $threads,
        ]);
    }

    public function show($categoryId, Thread $thread)
    {
        return view('show', [
            'thread' => $thread,
        ]);
    }

    public function create()
    {
        return view('create', [
            'categories' => Category::all(),
        ]);
    }

    public function store(Request $request)
    {
        Thread::create([
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect(route('threads.index'));
    }
}
