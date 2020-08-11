<!doctype html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Responsive HTML5 Template">
    <meta name="author" content="author.com">
    <title>Forum</title>

    <!-- STYLESHEET -->
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- icon -->
    <link rel="stylesheet" href="{{ asset('fonts/icons/main/mainfont/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/icons/font-awesome/css/font-awesome.min.css') }}">

    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/v3/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/v4/bootstrap-grid.css') }}">
    <!-- Custom -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="header js-header js-dropdown">
            <div class="container">
                <div class="header__logo">
                    <h1>
                        <img src="{{ asset('fonts/icons/main/Logo_Forum.svg ')}}" alt="logo">
                    </h1>
                    <a href="{{ route('threads.index') }}">
                        <div class="header__logo-btn" data-dropdown-btn="logo">
                            Forum<i class="icon-Arrow_Below"></i>
                        </div>
                    </a>
                </div>
                <div class="header__search">
                    <form action="#">
                        <label>
                            <input type="search" placeholder="Search all forums" class="form-control">
                        </label>
                    </form>
                    <div class="header__search-close js-header-search-btn-close"><i class="icon-Cancel"></i></div>
                    <div class="header__search-btn" data-dropdown-btn="search">
                        Topics
                    </div>
                </div>
            @if (Auth::check())
                <div class="header__notification">
                    <div class="header__notification-btn" data-dropdown-btn="notification">
                        <p style="margin-top:9px;">Notifications</p>
                    </div>
                    <div class="dropdown dropdown--design-01" data-dropdown-list="notification">
                        <div>
                            <a href="#">
                                <i class="icon-Favorite_Topic"></i>
                                <p>Roswell . 16 feb, 17<span>Which movie have you watched recently?</span></p>
                            </a>
                            <a href="#">
                                <i class="icon-Reply_Empty"></i>
                                <p>Callis . 18 feb, 17<span>I got an amzon thingie!</span></p>
                            </a>
                            <a href="#">
                                <i class="icon-Badge"></i>
                                <p>Earned Badge . 19 feb, 17<span><img src="{{ asset('fonts/icons/badges/Lets_talk.svg') }}" alt="Lets Talk">Lets Talk</span></p>
                            </a>
                            <a href="#">
                                <i class="icon-Badge"></i>
                                <p>Earned Badge . 21 feb, 17<span><img src="{{ asset('fonts/icons/badges/Intermediate.svg') }}" alt="Intermediate">Intermediate</span></p>
                            </a>
                            <a href="#">
                                <i class="icon-Share_Topic"></i>
                                <p>Charlie . 22 feb, 17<span>Need Video file of that cat.</span></p>
                            </a>
                            <a href="#">
                                <i class="icon-Pencil"></i>
                                <p>Greentea . 22 feb, 17<span>New Facebook like and share button.</span></p>
                            </a>
                            <span><a href="#">view older notifications...</a></span>
                        </div>
                    </div>
                </div>
                <div class="header__user">
                    <div class="header__user-btn" data-dropdown-btn="user">
                        <img src="{{ Auth::user()->avatar }}" alt="avatar">
                        {{ Auth::user()->name }}<i class="icon-Arrow_Below"></i>
                    </div>
                    <form action="/logout" method="POST">
                        @CSRF
                        <button class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </div>
            <div class="header__offset-btn">
                <a href="{{ route('threads.create') }}"><img src="{{ asset('fonts/icons/main/New_Topic.svg') }}" alt="New Topic"></a>
            </div>
            @else
            <div class="header">
                <a href="/register" style="margin-right:10px;">Register</a>
                <a href="/login">Login</a>
            </div>
            @endif
        </div>
    </header>

    @yield('content')

    <footer>
        <div class="footer js-dropdown">
            <div class="container">
                <div class="footer__logo">
                    <div>
                        <a href="{{ route('threads.index') }}">
                            <img src="{{ asset('fonts/icons/main/Logo_Forum.svg') }}"
                            alt="logo">Forum
                        </a>
                    </div>
                </div>
                <div class="footer__nav">
                    <div class="footer__tline">
                        <i class="icon-Support"></i>
                        <ul class="footer__menu">
                            <li><a href="#">Support</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">The Team</a></li>
                        </ul>
                        <div class="footer__language">
                            <div class="footer__language-btn" data-dropdown-btn="language">Americas - English<i class="icon-Arrow_Below"></i></div>
                            <div class="footer__language-dropdown dropdown dropdown--design-01 dropdown--reverse-y" data-dropdown-list="language">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <h3>Region</h3>
                                        <ul class="dropdown__catalog">
                                            <li class="active"><a href="#"><i></i>America</a></li>
                                            <li><a href="#"><i></i>Europe</a></li>
                                            <li><a href="#"><i></i>Asia</a></li>
                                            <li><a href="#"><i></i>China</a></li>
                                            <li><a href="#"><i></i>Australia</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6">
                                        <h3>Language</h3>
                                        <ul class="dropdown__catalog">
                                            <li class="active"><a href="#"><i></i>English</a></li>
                                            <li><a href="#"><i></i>Espanol</a></li>
                                            <li><a href="#"><i></i>Portugues</a></li>
                                            <li><a href="#"><i></i>Chinese</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer__bline">
                        <ul class="footer__menu">
                            <li class="footer__copyright"><span>&copy; 2020 Forum</span></li>
                            <li><a href="#">Teams</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Send Feedback</a></li>
                        </ul>
                        <div class="footer__language-btn-m" data-dropdown-btn="language">Americas - English<i class="icon-Arrow_Below"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JAVA SCRIPT -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/velocity/velocity.min.js"></script>
    <script src="js/app.js"></script>

</body>
</html>