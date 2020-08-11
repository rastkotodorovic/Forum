@extends('layouts.layout')

@section('content')

    <main>
        <div class="container">
            <div class="nav">
                <div class="nav__categories js-dropdown">
                    <div class="nav__select">
                        <div class="btn-select" data-dropdown-btn="categories">All Categories</div>
                        <nav class="dropdown dropdown--design-01" data-dropdown-list="categories">
                            <ul class="dropdown__catalog row">
                                @foreach($threads as $thread)
                                    <li class="col-xs-6"><a href="/threads/{{ $thread->category->slug }}" class="category"><i class="bg-f9bc64"></i>{{ $thread->category->name }}</a></li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="nav__menu js-dropdown">
                    <div class="nav__select">
                        <div class="btn-select" data-dropdown-btn="menu">Latest</div>
                        <div class="dropdown dropdown--design-01" data-dropdown-list="menu">
                            <ul class="dropdown__catalog">
                                <li><a href="#">Latest</a></li>
                                <li><a href="#">Unread</a></li>
                                <li><a href="#">Rising</a></li>
                                <li><a href="#">Most Liked</a></li>
                                <li><a href="#">Follow Feed</a></li>
                            </ul>
                        </div>
                    </div>
                    <ul>
                        <li class="active"><a href="#">Latest</a></li>
                        <li><a href="#">Unread</a></li>
                        <li><a href="#">Rising</a></li>
                        <li><a href="#">Most Liked</a></li>
                        <li><a href="#">Follow Feed</a></li>
                    </ul>
                </div>
            </div>
            <div class="posts">
                <div class="posts__head">
                    <div class="posts__topic">Topic</div>
                    <div class="posts__category">Category</div>
                    <div class="posts__users">Creator</div>
                    <div class="posts__replies">Replies</div>
                    <div class="posts__views">Views</div>
                    <div class="posts__activity">Posted</div>
                </div>
                @foreach($threads as $thread)
                    <div class="posts__body">
                        <div class="posts__item">
                            <div class="posts__section-left">
                                <div class="posts__topic">
                                    <div class="posts__content">
                                        <a href="{{ route('threads.show', [$thread->category->slug, $thread->id]) }}">
                                            <h3>{{ $thread->title }}</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="posts__category"><a href="/threads/{{ $thread->category->slug }}" class="category"><i class="bg-368f8b"></i>{{ $thread->category->name }}</a></div>
                            </div>
                            <div class="posts__section-right">
                                <div class="posts__users">
                                    <a href="/threads?by={{ $thread->user->name }}">
                                        {{ $thread->user->name }}
                                    </a>
                                </div>
                                <div class="posts__replies">{{ $thread->reply->count() }}</div>
                                <div class="posts__views">14.5k</div>
                                <div class="posts__activity">{{ $thread->created_at->diffForHumans() }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

@endsection