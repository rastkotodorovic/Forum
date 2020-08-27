<!doctype html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Responsive HTML5 Template">
    <meta name="author" content="author.com">
    <title>Responsive HTML5 Template</title>

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

<div class="signup">
    <!-- MAIN -->
    <main class="signup__main">
        <img class="signup__bg" src="{{ asset('images/signup-bg.png') }}" alt="bg">

        <div class="container">
            <div class="signup__container">
                <div class="signup__logo">
                    <a href="#"><img src="{{ asset('fonts/icons/main/Logo_Forum.svg') }}" alt="logo">Forum</a>
                </div>

                <div class="signup__head">
                    <h3>Edit profile</h3>
                </div>
                <form method="POST" action="{{ route('user.update', Auth::user()) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="signup__form">
                        <div class="signup__section">
                            <label class="signup__label" for="username">Username</label>
                            <input type="text" class="form-control" id="username" value="{{ Auth::user()->name }}" name="name">
                        </div>
                        <div class="signup__section">
                            <label class="signup__label" for="email">Avatar</label>
                            <input type="file" class="form-control" id="email" name="avatar">
                        </div>
                        <button class="signup__btn-create btn btn--type-02">
                            Update Profile
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="signup__footer">
        <div class="container">
            <div class="signup__footer-content">
                <ul class="signup__footer-menu">
                    <li><a href="#">Teams</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Send Feedback</a></li>
                </ul>
                <ul class="signup__footer-social">
                    <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-cloud" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>

    <!-- JAVA SCRIPT -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/velocity/velocity.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>