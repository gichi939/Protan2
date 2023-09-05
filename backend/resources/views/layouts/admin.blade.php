<!DOCTYPE html>
<html lang="en">

<head>
    <!-- bootstrap読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- BootstrapのCSS読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- css読み込み -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.11.0/devicon.min.css">

    @if (config('app.env') === 'production')
        <link rel="stylesheet" href="{{ secure_asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css/nav.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css/header.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    @endif

    @yield('styles')

    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>
    {{-- fontawesomeの読み込み --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-expand-md navbar-light shadow-sm col-12">
                    <a class="logo-title" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>

                    <!-- Right Side Of Navbar -->
                    @auth
                        <div style="margin: 0 0 0 auto">
                            <ul class="right-nav-auth">
                                <li class="mypage-button">
                                    <a href="{{ route('mypage.show') }}"><i class="fa-solid fa-lg fa-user"></i></a>
                                </li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                                <li class="logout-button">
                                        <i class="fa-solid fa-lg fa-right-from-bracket"></i>
                                </li>
                                <div class="logout-popup">
                                    <div class="popup-backgrond"></div>
                                    <div class="popup-logout-body">
                                        <div>
                                            <div class="logout-sentence">
                                                ログアウトしますか？
                                            </div>
                                            <div class="logout-bool">
                                                <a class="login_link" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                    はい
                                                </a>
                                                <button class="close-button">
                                                    いいえ
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    @else
                        <ul class="right-nav">
                            <li class="login-button">
                                <a href="/login">ログイン</a>
                            </li>

                            <li class="register-button">
                                <a href="/register">新規登録</a>
                            </li>

                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <main>
        @yield('content')
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</body>

</html>
