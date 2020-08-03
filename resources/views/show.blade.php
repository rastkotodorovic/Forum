@extends('layouts.layout')

@section('content')

    <main>
        <div class="container">
            <div class="topics">
                <div class="topics__heading">
                    <h2 class="topics__heading-title">Which movie have you watched most recently?</h2>
                    <div class="topics__heading-info">
                        <a href="#" class="category"><i class="bg-3ebafa"></i> Exchange</a>
                        <div class="tags">
                            <a href="#" class="bg-4f80b0">gaming</a>
                            <a href="#" class="bg-424ee8">nature</a>
                            <a href="#" class="bg-36b7d7">entertainment</a>
                        </div>
                    </div>
                </div>
                <div class="topics__body">
                    <div class="topics__content">
                        <div class="topic">
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/B.svg" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">Benjamin Caesar</a>
                                    </div>
                                    <div class="topic__date"><i class="icon-Watch_Later"></i>06 May, 2017</div>
                                </div>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                    <p>Welcome to Prey. A lot of this game is going to feel familiar — you’ll see bits and pieces from a dozen well-loved games in its DNA. But that doesn’t mean you’re going to immediately understand how everything works. That’s what we’re here for. Let’s talk about some of the habits you’re going to have to pick up, concepts you’ll have to learn and choices you’re going to be making as you play.</p>
                                    <p>We’re going to break it down into three rough categories: Your world, your enemies (and ways to kill them) and yourself.</p>
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
                                            <span class="topic__info-title">Created</span>
                                            <div  class="topic__info-avatar">
                                                <a href="#" class="avatar"><img src="fonts/icons/avatars/B.svg" alt="avatar"></a>
                                                <span>13d</span>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="topic__info-title">Last reply</span>
                                            <div  class="topic__info-avatar">
                                                <a href="#" class="avatar"><img src="fonts/icons/avatars/A.svg" alt="avatar"></a>
                                                <span>4h</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="topic__info-section">
                                        <div>
                                            <span class="topic__info-title">Replies</span>
                                            <div  class="topic__info-count">18</div>
                                        </div>
                                        <div>
                                            <span class="topic__info-title">Views</span>
                                            <div  class="topic__info-count">205</div>
                                        </div>
                                        <div>
                                            <span class="topic__info-title">Users</span>
                                            <div  class="topic__info-count">6</div>
                                        </div>
                                        <div>
                                            <span class="topic__info-title">Likes</span>
                                            <div  class="topic__info-count">315</div>
                                        </div>
                                        <div>
                                            <span class="topic__info-title">Links</span>
                                            <div  class="topic__info-count">7</div>
                                        </div>
                                    </div>
                                    <a href="#" class="topic__info-more"><i class="icon-Arrow_Down"></i></a>
                                </div>
                                <div class="topic__title">
                                    <p>There are <span>81 replies</span> with an estimated read time of <span>11 minutes.</span></p>
                                </div>
                                <div class="topic__btns">
                                    <a href="#" class="btn btn--type-02">Summarize <span data-visible="desktop">This</span>Topic</a>
                                    <div class="topic__select">
                                        <p>Sort replies by:</p>
                                        <div class="btn-select"><i class="icon-Favorite_Topic"></i>Most Liked</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="topic">
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/N.svg" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">Nicolas</a>
                                    </div>
                                    <div class="topic__date">
                                        <div class="topic__user topic__user--pos-r">
                                            <i class="icon-Reply_Fill"></i>
                                            <a href="#" class="avatar"><img src="fonts/icons/avatars/B.svg" alt="avatar"></a>
                                            <a href="#" class="topic__user-name">Benjamin Caesar</a>
                                        </div>
                                        <i class="icon-Watch_Later"></i>06 May, 2017
                                    </div>
                                </div>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                    <p>I am using BootStrap 4, but they are asking me to use PHP framework, which I won't do. My code is secure against SQL injection, XSS and all other attacks, it is well organized, i was using OOP. I just think CodeCanyon will always find a reason to reject my work....</p>
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
                        <div class="topic">
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/T.svg" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">Tesla</a>
                                    </div>
                                    <div class="topic__date"><i class="icon-Watch_Later"></i>07 May, 2017</div>
                                </div>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                    <p>Yeah! This is really bad. Rejecting an item because its not using a PHP framework(no matter what the script is doing) is a wrong move I think. There are a lot of people reporting this problem(Rejected because of not using a framework).</p>
                                </div>
                                <div class="topic__footer">
                                    <div class="topic__footer-likes">
                                        <div>
                                            <a href="#"><i class="icon-Upvote"></i></a>
                                            <span>71</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Downvote"></i></a>
                                            <span>06</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Favorite_Topic"></i></a>
                                            <span>42</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Reply_Empty"></i></a>
                                            <span>01</span>
                                        </div>
                                    </div>
                                    <div class="topic__footer-share">
                                        <div data-visible="desktop">
                                            <a href="#"><i class="icon-Share_Topic"></i></a>
                                            <a href="#"><i class="icon-Flag_Topic"></i></a>
                                            <a href="#" class="active"><i class="icon-Already_Bookmarked"></i></a>
                                        </div>
                                        <div data-visible="mobile">
                                            <a href="#"><i class="icon-More_Options"></i></a>
                                        </div>
                                        <a href="#"><i class="icon-Reply_Fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="topic topic--comment">
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/L.svg" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">Larry</a>
                                    </div>
                                </div>
                                <a href="#" class="topic__arrow topic__arrow--up"><i class="icon-Arrow_Up"></i></a>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                    <p>Can you stop ADP, and create new option for author can create coupon code, Author will give for their customer. It's better than now.</p>
                                </div>
                            </div>
                        </div>
                        <div class="topic">
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/K.svg" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">Kevin</a>
                                    </div>
                                    <div class="topic__date"><i class="icon-Watch_Later"></i>08 May, 2017</div>
                                </div>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                    <p>I will, but I'm not doing it for me, i'll open ticket for the community.</br>I got accepted with no problems on other marketplace.</p>
                                    <div class="topic topic--answer">
                                        <div class="topic__head">
                                            <div class="topic__caption">
                                                <div class="topic__user">
                                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/T.svg" alt="avatar"></a>
                                                    <a href="#" class="topic__user-name">Tesla</a>
                                                </div>
                                            </div>
                                            <a href="#" class="topic__arrow"><i class="icon-Arrow_Up"></i></a>
                                        </div>
                                        <div class="topic__content">
                                            <div class="topic__text">
                                                <p>Yeah! This is really bad. Rejecting an item because its not using a PHP framework(no matter what the script is doing) is a wrong move I think.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Subscribers may download more than an ad-hoc purchaser on a marketplace, but by retaining subscribers over time (paying money every month), there’s more money in total for contributors.</p>
                                </div>
                                <div class="topic__footer">
                                    <div class="topic__footer-likes">
                                        <div>
                                            <a href="#"><i class="icon-Upvote"></i></a>
                                            <span>415</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Downvote"></i></a>
                                            <span>28</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Favorite_Topic"></i></a>
                                            <span>49</span>
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
                        <div class="topic topic--selected">
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/C.svg" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">Callis</a>
                                    </div>
                                </div>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                    <p>This post has been hidden by a moderator. Received too much downvotes.</p>
                                </div>
                                <div class="topic__footer">
                                    <div class="topic__footer-likes">
                                        <div>
                                            <a href="#"><i class="icon-Downvote"></i></a>
                                            <span>617</span>
                                        </div>
                                    </div>
                                    <div class="topic__footer-show">
                                        <a href="#" class="btn">Show me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="topic">
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/R.svg" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">Robin</a>
                                    </div>
                                    <div class="topic__date"><i class="icon-Watch_Later"></i>09 May, 2017</div>
                                </div>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                    <p>Does our 60% more expensive milk go well with your 60% more expensive coffee?</p>
                                </div>
                                <div class="topic__footer">
                                    <div class="topic__footer-likes">
                                        <div>
                                            <a href="#"><i class="icon-Upvote"></i></a>
                                            <span>21</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Downvote"></i></a>
                                            <span>03</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Favorite_Topic"></i></a>
                                            <span>08</span>
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
                            <div class="topic__head">
                                <div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/L.svg" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#">Larry</a>
                                    </div>
                                    <div class="topic__date">
                                        <div class="topic__user topic__user--pos-r">
                                            <i class="icon-Reply_Fill"></i>
                                            <a href="#" class="avatar"><img src="fonts/icons/avatars/T.svg" alt="avatar"></a>
                                            <a href="#" class="topic__user-name">Tesla</a>
                                        </div>
                                        <i class="icon-Watch_Later"></i>3d
                                    </div>
                                </div>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                    <p>Can you stop ADP, and create new option for author can create coupon code, Author will give for their customer. It's better than now.</p>
                                </div>
                                <div class="topic__footer">
                                    <div class="topic__footer-likes">
                                        <div>
                                            <a href="#"><i class="icon-Upvote"></i></a>
                                            <span>139</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Downvote"></i></a>
                                            <span>32</span>
                                        </div>
                                        <div>
                                            <a href="#"><i class="icon-Favorite_Topic"></i></a>
                                            <span>68</span>
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
                    <a href="#" class="btn btn--type-02" data-visible="desktop"><i class="icon-Reply_Fill"></i>Reply</a>
                </div>
                <div class="topics__title">Suggested Topics</div>
            </div>
            <div class="posts">
                <div class="posts__head">
                    <div class="posts__topic">Topic</div>
                    <div class="posts__category">Category</div>
                    <div class="posts__users">Users</div>
                    <div class="posts__replies">Replies</div>
                    <div class="posts__views">Views</div>
                    <div class="posts__activity">Activity</div>
                </div>
                <div class="posts__body">
                    <div class="posts__item">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>Current news and discussion</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-368f8b"></i>Politics</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/A.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/G.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/P.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">31</div>
                            <div class="posts__views">14.5k</div>
                            <div class="posts__activity">13d</div>
                        </div>
                    </div>
                    <div class="posts__item bg-f2f4f6">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>Get your username drawn by the other users of unity! or a drawing based on what you do</h3>
                                    </a>
                                    <div class="posts__tags tags">
                                        <a href="#" class="bg-4f80b0">gaming</a>
                                        <a href="#" class="bg-424ee8">nature</a>
                                        <a href="#" class="bg-36b7d7">entertainment</a>
                                    </div>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-4436f8"></i>Video</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/L.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/T.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">252</div>
                            <div class="posts__views">396</div>
                            <div class="posts__activity">13m</div>
                        </div>
                    </div>
                    <div class="posts__item">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>Which movie have you watched most recently?</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-3ebafa"></i> Exchange</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/E.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/I.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/R.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">207</div>
                            <div class="posts__views">7.5k</div>
                            <div class="posts__activity">41m</div>
                        </div>
                    </div>
                    <div class="posts__item posts__item--bg-gradient">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3><span>This post contails spoiler about</span> Star Wars Movie.</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-777da7"></i> Q&amp;As</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/F.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">2.3k</div>
                            <div class="posts__views">2.0k</div>
                            <div class="posts__activity">1h</div>
                        </div>
                    </div>
                    <div class="posts__item">
                        <div class="posts__section-left">
                            <div class="posts__topic">
                                <div class="posts__content">
                                    <a href="#">
                                        <h3>Take a picture of what you’re doing at this very moment</h3>
                                    </a>
                                    <div class="posts__tags tags">
                                        <a href="#" class="bg-ec008c">selfie</a>
                                        <a href="#" class="bg-7cc576">camera</a>
                                    </div>
                                </div>
                            </div>
                            <div class="posts__category"><a href="#" class="category"><i class="bg-c6b38e"></i> Pets</a></div>
                        </div>
                        <div class="posts__section-right">
                            <div class="posts__users">
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/C.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/U.svg" alt="avatar"></a>
                                </div>
                                <div>
                                    <a href="#" class="avatar"><img src="fonts/icons/avatars/I.svg" alt="avatar"></a>
                                </div>
                            </div>
                            <div class="posts__replies">441</div>
                            <div class="posts__views">3.1k</div>
                            <div class="posts__activity">6h</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection