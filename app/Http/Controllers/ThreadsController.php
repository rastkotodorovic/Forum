<?php

namespace App\Http\Controllers;

use App\User;
use App\Reply;
use App\Thread;
use App\Category;
use App\Filter\ThreadFilter;
use Illuminate\Http\Request;
use App\Http\Requests\ThreadRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        $thread->recordVisit();

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

    public function store(ThreadRequest $request)
    {
        Thread::create($request->validated());

        Session::flash('success', 'You have successfully created a thread!');

        return redirect()->route('threads.index');
    }

    public function destroy(Thread $thread)
    {
        $this->authorize('delete', $thread);

        $thread->delete();

        Session::flash('success', 'Your thread has been successfully deleted!');

        return redirect()->route('threads.index');
    }
}
