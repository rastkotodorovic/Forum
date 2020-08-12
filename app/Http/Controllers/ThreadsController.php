<?php

namespace App\Http\Controllers;

use App\Thread;
use App\Category;
use App\Filter\ThreadFilter;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class ThreadsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index(Category $category, ThreadFilter $filters)
    {
        $threads = Thread::getThreads($category, $filters);

        return view('index', [
            'threads' => $threads,
            'categories' => Category::all(),
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
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Thread::create([
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect(route('threads.index'));
    }

    public function destroy(Thread $thread)
    {
        $thread->delete();

        return redirect()->route('threads.index');
    }
}
