@extends('layouts.layout')

@section('content')

    <main>
        <div class="container">
            <div class="topics">
                <div class="topics__heading">
                    <h2 class="topics__heading-title">{{ $thread->title }}</h2>
                    <div class="topics__heading-info">
                        <a href="#" class="category"><i class="bg-3ebafa"></i> Exchange</a>
                    </div>
                </div>
                <div class="topics__body">
                    <div class="topics__content">
                        <div class="topic">
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="{{ $thread->user->avatar }}" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">{{ $thread->user->name }}</a>
                                    </div>
                                    <div class="topic__date"><i class="icon-Watch_Later"></i>{{ $thread->created_at->diffForHumans() }}</div>
                                </div>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                    <p>{{ $thread->body }}</p>
                                </div>
                                <div class="topic__footer">
                                    <div class="topic__footer-likes">
                                        <div>
                                            <a href="#"><i class="icon-Upvote"></i></a>
                                            <span>201</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Downvote"></i></a>
                                            <span>08</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Favorite_Topic"></i></a>
                                            <span>39</span>
                                        </div>
                                    </div>
                                    <div class="topic__footer-share">
                                        <div data-visible="desktop">
                                            <a href="#"><i class="icon-Share_Topic"></i></a>
                                            <a href="#"><i class="icon-Flag_Topic"></i></a>
                                            <a href="#"><i class="icon-Bookmark"></i></a>
                                        </div>
                                        <div data-visible="mobile">
                                            <a href="#"><i class="icon-More_Options"></i></a>
                                        </div>
                                        <a href="#"><i class="icon-Reply_Fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="topic">
                            <div class="topic__content">
                                <div class="topic__info">
                                    <div class="topic__info-section">
                                        <div>
                                            <span class="topic__info-title">Replies</span>
                                            <div  class="topic__info-count">{{ $thread->reply->count() }}</div>
                                        </div>
                                        <div>
                                            <span class="topic__info-title">Views</span>
                                            <div  class="topic__info-count">205</div>
                                        </div>
                                        <div>
                                            <span class="topic__info-title">Users</span>
                                            
                                            <div  class="topic__info-count">6</div>
                                        </div>
                                    </div>
                                    <a href="#" class="topic__info-more"><i class="icon-Arrow_Down"></i></a>
                                </div>
                            </div>
                        </div>
                        @forelse($thread->reply as $reply)
                            <div class="topic">
                                <div class="topic__head">
                                    <div class="topic__avatar">
                                        <a href="#" class="avatar"><img src="{{ $reply->user->avatar }}" alt="avatar"></a>
                                    </div>
                                    <div class="topic__caption">
                                        <div class="topic__name">
                                            <a href="#">{{ $reply->user->name }}</a>
                                        </div>
                                        <div class="topic__date">
                                            <div class="topic__user topic__user--pos-r">
                                                <i class="icon-Reply_Fill"></i>
                                                <a href="#" class="avatar"><img src="{{ $reply->thread->user->avatar }}" alt="avatar"></a>
                                                <a href="#" class="topic__user-name">{{ $reply->thread->user->name }}</a>
                                            </div>
                                            <i class="icon-Watch_Later"></i>{{ $reply->created_at->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>
                                <div class="topic__content">
                                    <div class="topic__text">
                                        <p>{{ $reply->body }}</p>
                                    </div>
                                    <div class="topic__footer">
                                        <div class="topic__footer-likes">
                                            <div>
                                                <a href="#"><i class="icon-Upvote"></i></a>
                                                <span>137</span>
                                            </div>
                                            <div>
                                                <a href="#"><i class="icon-Downvote"></i></a>
                                                <span>02</span>
                                            </div>
                                            <div>
                                                <a href="#"><i class="icon-Favorite_Topic"></i></a>
                                                <span>46</span>
                                            </div>
                                        </div>
                                        <div class="topic__footer-share">
                                            <div data-visible="desktop">
                                                <a href="#"><i class="icon-Share_Topic"></i></a>
                                                <a href="#"><i class="icon-Flag_Topic"></i></a>
                                                <a href="#"><i class="icon-Bookmark"></i></a>
                                            </div>
                                            <div data-visible="mobile">
                                                <a href="#"><i class="icon-More_Options"></i></a>
                                            </div>
                                            <a href="#"><i class="icon-Reply_Fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>There are currently no replies.</p>
                        @endforelse
                    </div>
                    <div class="topics__calendar">
                        <div class="calendar">
                            <div class="calendar__top">
                                <a href="#" class="calendar__btn calendar__btn--c-01"><i class="icon-Calender"></i></a>
                            </div>
                            <div class="calendar__center">
                                <div class="calendar__first">Jun 12</div>
                                <div class="calendar__range">
                                    <div class="calendar__current">
                                        <p>31 / 75</p>
                                        <span>Jun 17</span>
                                    </div>
                                </div>
                                <div class="calendar__last">6h ago</div>
                            </div>
                            <div class="calendar__bottom">
                                <a href="#" class="calendar__btn calendar__btn--c-01"><i class="icon-Track"></i></a>
                                <a href="#" class="calendar__btn calendar__btn--c-02"><i class="icon-Reply_Fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="topics__control">
                    @if (Auth::check())
                        <form action="{{ route('replies.store', $thread) }}" method="POST">
                            @CSRF
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="width:84%;" name="body"></textarea>
                            </div>
                            <button class="btn btn--type-02">Reply</button>
                        </form>
                    @endif
                </div>
                <div class="topics__title">Suggested Topics</div>
            </div>
            <div class="posts">
                <div class="posts__head">
                    <div class="posts__topic">Topic</div>
                    <div class="posts__category">Category</div>
                    <div class="posts__users">Creator</div>
                    <div class="posts__replies">Replies</div>
                    <div class="posts__views">Views</div>
                    <div class="posts__activity">Activity</div>
                </div>
                @foreach($threads as $thread)
                    <div class="posts__body">
                        <div class="posts__item">
                            <div class="posts__section-left">
                                <div class="posts__topic">
                                    <div class="posts__content">
                                        <a href="{{ route('threads.show', $thread) }}">
                                            <h3>{{ $thread->title }}</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="posts__category"><a href="#" class="category"><i class="bg-368f8b"></i>Politics</a></div>
                            </div>
                            <div class="posts__section-right">
                                <div class="posts__users">
                                    <p>{{ $thread->user->name }}</p>
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