<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-08DPQ0TDCW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-08DPQ0TDCW');
    </script>
    <title>ASOPort</title>

    <!-- スタイルの切り替え -->
    @yield('style')
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
                <a class="c_font_bold" href="{{ url('/profile') }}">マイページへ</a>
                <a class="c_font_bold" href="{{ url('/profile_edit') }}">プロフィールを編集</a>
                <!-- 要修正(css) -->
                <form action="{{ url('/logout') }}" method="POST">
                    @csrf
                    <input type="submit" value="ログアウト" class="c_font_bold" style="cursor: pointer;">
                </form>
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
                <a class="c_font_bold" href="{{ url('/login') }}">ログイン</a>
            </div>
        </header>
    </div>
    @endif

    <!-- ===== Search Field ===== -->
    <div class="search_field c_font_bold">
        <form action="{{ url('/search') }}" method="POST">
            @csrf
            <div class="search_input_wrapper c_font_bold">
                <label class="" for="keyword">キーワード検索</label>
                <input class="c_font_regular" type="text" name="keyword" id="keyword">

                <label class="">使用言語</label>

                <div class="search-lang-box">
                    @foreach($langs as $lang)
                    @if($lang->id == 6)
                    <div class="more-lang">
                        @endif
                        <label class="search-lang-label" style="margin"><input type="checkbox" name="language[]"
                                value="{{ $lang->name }}" class="required-lang"><span>{{ $lang->name }}</span></label>
                        @if($lang->id % 5 == 0 && $lang->id< 6)
                        <div style="margin-bottom: 7px;"></div>
                    @elseif(($lang->id - 5) % 5 == 0 && $lang->id > 6)
                    <div style="margin-bottom: 7px;"></div>
                    @endif

                    @if($lang->id == count($langs))
                </div>
                @endif
                @endforeach
                <p class="more"></p>
            </div>

            <!--
                <div class="checkbox_wrapper">
                    <input type="checkbox" name="language[]" value="HTML" id="html"><label for="html">HTML</label>
                    <input type="checkbox" name="language[]" value="CSS" id="css"><label for="css">CSS</label>
                    <input type="checkbox" name="language[]" value="JavaScript" id="javascript"><label for="javascript">JavaScript</label>
                    <input type="checkbox" name="language[]" value="PHP" id="php"><label for="php">PHP</label>
                    <input type="checkbox" name="language[]" value="Java" id="java"><label for="java">Java</label>
                </div>
                -->

            <button type="submit" class="c_font_bold">検索する</button>
    </div>
    </form>
    </div>
    <!-- ===== 検索フィールド表示時の黒背景 ===== -->
    <div class="search_black_back"></div>

    <!-- それぞれのページの中身をインポート -->
    @yield('content')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script/masonry.pkgd.min.js"></script>
    <script src="script/lazyload.min.js"></script>
    <script src="script/imagesloaded.pkgd.min.js"></script>
    <script src="script/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>