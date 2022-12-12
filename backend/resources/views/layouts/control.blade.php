<!DOCTYPE html>
<html lang="en">

<head>
    <!-- bootstrap読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- BootstrapのCSS読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    {{-- fontawesomeの読み込み --}}
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- css読み込み -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.11.0/devicon.min.css">
    <link rel="stylesheet" href="{{ asset('css/management.css') }}">
    <link rel="stylesheet" href="{{ asset('css/html.css') }}">

    <title>@yield('title')</title>
</head>

<body>
    <div id="app">
        <div class="container-fluid">
            <div class="row">

                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm col-12">
                    <a class="navbar-brand" href="{{ url('/management') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="gnavi">
                            <li>
                                <a href="/management/html_word">HTML</a>
                            </li>
                            <li>
                                <a href="/management/css">CSS</a>
                            </li>
                            <li>
                                <a href="/management/html_list">HTMLの一覧</a>
                            </li>
                            <li>
                                <a href="/management/css_list">CSSの一覧</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <main>
        @yield('content')
    </main>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</body>

</html>