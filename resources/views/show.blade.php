@extends('layouts.layout')

@section('content')

    <main>
        <div class="container">
            <div class="topics">
                <div class="topics__heading">
                    <h2 class="topics__heading-title">{{ $thread->title }}</h2>
                    <div class="topics__heading-info">
                        <a href="#" class="category"><i class="bg-3ebafa"></i>{{ $thread->category->name }}</a>
                    </div>
                </div>
                <div class="topics__body">
                    <div class="topics__content">
                        <div class="topic">
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    <a href="#" class="avatar">
                                    @if(empty($thread->user->avatar))
                                        <img src="https://image.shutterstock.com/image-illustration/male-default-avatar-profile-gray-260nw-582509287.jpg" alt="Default avatar">
                                    @else
                                        <img src="{{ asset('storage/' . $thread->user->avatar) }}" alt="avatar" class="img-circle">
                                    @endif
                                    </a>
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
                                            <div  class="topic__info-count">{{ $thread->replies }}</div>
                                        </div>
                                        <div>
                                            <span class="topic__info-title">Views</span>
                                            <div  class="topic__info-count">{{ $thread->visits() }}</div>
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
                            <reply-component :attributes="{{ $reply }}" inline-template>
                                <div class="topic">
                                    <div class="topic__head">
                                        <div class="topic__avatar">
                                            <a href="#" class="avatar">
                                            @if(empty($reply->user->avatar))
                                                <img src="https://image.shutterstock.com/image-illustration/male-default-avatar-profile-gray-260nw-582509287.jpg" alt="Default avatar">
                                            @else
                                                <img src="{{ asset('storage/' . $reply->user->avatar) }}" alt="avatar" class="img-circle">
                                            @endif
                                            </a>
                                        </div>
                                        <div class="topic__caption">
                                            <div class="topic__name">
                                                <a href="#">{{ $reply->user->name }}</a>
                                            </div>
                                            <div class="topic__date">
                                                <div class="topic__user topic__user--pos-r">
                                                    Replied to
                                                    <i class="icon-Reply_Fill"></i>
                                                    <a href="#" class="avatar">
                                                        @if(empty($reply->thread->user->avatar))
                                                            <img src="https://image.shutterstock.com/image-illustration/male-default-avatar-profile-gray-260nw-582509287.jpg" alt="Default avatar">
                                                        @else
                                                            <img src="{{ asset('storage/' . $reply->thread->user->avatar) }}" alt="avatar" class="img-circle">
                                                        @endif
                                                    </a>
                                                    <a href="#" class="topic__user-name">{{ $reply->thread->user->name }}</a>
                                                </div>
                                                <i class="icon-Watch_Later"></i>{{ $reply->created_at->diffForHumans() }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="topic__content">
                                        <div class="topic__text">
                                            <div v-if="editing">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" v-model="body" rows="3"></textarea><br>
                                                <button class="btn btn--type-02" @click="update">Update</button>
                                                <button class="btn btn--type-03" @click="editing = false">Cancel</button>
                                            </div>
                                            <div v-else>
                                                <p v-text="body"></p>
                                            </div>
                                        </div>
                                        <div class="topic__footer">
                                            <div class="topic__footer-likes">
                                                @auth
                                                    <div>
                                                        <favorite-component :reply="{{ $reply }}"></favorite-component>
                                                        {{-- <form action="{{ route('favorite.store', $reply) }}" method="POST">
                                                            @csrf
                                                            <button class="btn {{ $reply->isFavorited() ? "btn--type-03" : "btn-default" }}">Favorite</button>
                                                        </form> --}}
                                                    </div>
                                                @endauth
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
                                                @can('update', $reply)
                                                    <button class="btn btn--type-02" @click="editing = true">Edit</button>
                                                @endcan
                                                @can('delete', $reply)
                                                    <button class="btn btn--type-03" @click="destroy">Delete</button>
                                                @endcan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </reply-component>
                        @empty
                            <p>There are currently no replies.</p>
                        @endforelse
                    </div>
                    <div class="topics__calendar">
                        <div class="calendar">
                            <div class="calendar__top">
                                @can('delete', $thread)
                                    <form action="{{ route('threads.destroy', $thread) }}" method="POST">
                                    @CSRF
                                        <button class="btn btn--type-03">Delete Thread</button>
                                    </form>
                                @endcan
                            </div>
                            <div class="calendar__center">
                                <div class="calendar__first">{{ $thread->created_at->diffForHumans() }}</div>
                                <div class="calendar__range">
                                </div>
                                <div class="calendar__last">
                                    @isset ($reply)
                                        {{ $reply->created_at->diffForHumans()}}
                                    @endisset
                                </div>
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
                        <form action="{{ route('replies.store', [$thread->category, $thread]) }}" method="POST">
                            @CSRF
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="width:84%;" name="body"></textarea>
                            </div>
                            <button class="btn btn--type-02">Reply</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </main>

@endsection