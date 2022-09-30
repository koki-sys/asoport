<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASOPort</title>

    <link rel="stylesheet" href="css/style.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/9ddb128e39.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script/masonry.pkgd.min.js"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="light">
    <!-- ====== Header ====== -->
    @if(Auth::check())
    <div class="header_wrapper">
        <header class="c_flex_center">
            <h1 class="c_pacifico"><a href="{{ url('/') }}">ASOPort</a></h1>
            <div class="search_wrapper">
                <ion-icon class="search_icon" name="search-outline"></ion-icon>
                <ion-icon class="close_icon" name="close-outline"></ion-icon>
            </div>
            <div class="header_icon_wrapper">
                <a href="{{ url('/create') }}">
                    <ion-icon class="plus_icon" id="add_portfolio" name="add-outline"></ion-icon>
                </a>
                <ion-icon class="open_menu_icon" name="person-outline"></ion-icon>
                <ion-icon class="theme_toggle" name="contrast-outline"></ion-icon>
            </div>
            <div class="menu">
                <a class="c_font_bold" href="{{ url('/profile') }}">プロフィールへ</a>
                <a class="c_font_bold" href="#">プロフィールを編集</a>
                <!-- ↓ログイン後はログアウトにしてください -->
                <a class="c_font_bold" href="#">ログアウト</a>
            </div>
        </header>
    </div>
    @else
    <div class="header_wrapper">
        <header class="c_flex_center">
            <h1 class="c_pacifico"><a href="{{ url('/') }}">ASOPort</a></h1>
            <div class="search_wrapper">
                <ion-icon class="search_icon" name="search-outline"></ion-icon>
                <ion-icon class="close_icon" name="close-outline"></ion-icon>
            </div>
            <div class="header_icon_wrapper">
                <ion-icon class="open_menu_icon" name="person-outline"></ion-icon>
                <ion-icon class="theme_toggle" name="contrast-outline"></ion-icon>
            </div>
            <div class="menu">
                <a class="c_font_bold" href="{{ url('/register') }}">新規登録へ</a>
                <a class="c_font_bold" href="{{url('/login') }}">ログイン</a>
            </div>
        </header>
    </div>
    @endif

    <!-- それぞれのページの中身をインポート -->
    @yield('content')

    <script src="script/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>