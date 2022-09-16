<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASOPort</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script/masonry.pkgd.min.js"></script>
</head>

<body class="light">
    <!-- ====== Header ====== -->
    <div class="header_wrapper">
        <header class="c_flex_center">
            <h1 class="c_pacifico"><a href="{{ url('/') }}">ASOPort</a></h1>
            <div class="search_wrapper">
                <ion-icon class="search_icon" name="search-outline"></ion-icon>
                <ion-icon class="close_icon" name="close-outline"></ion-icon>
            </div>
            <div class="header_icon_wrapper">
                <ion-icon class="plus_icon" id="add_portfolio" name="add-outline"></ion-icon>
                <a href="{{ url('/profile') }}">
                    <ion-icon name="person-outline"></ion-icon>
                </a>
                <ion-icon class="theme_toggle" name="contrast-outline"></ion-icon>
            </div>
        </header>
    </div>

    <!-- ===== Search Field ===== -->
    <div class="search_field c_font_bold">
        <form action="/search" method="post">
            @csrf
            <div class="search_input_wrapper c_font_bold">
                <label class="" for="keyword">キーワード検索</label>
                <input class="c_font_regular" type="text" name="keyword" id="keyword">
                <label class="">使用言語</label>
                <div class="checkbox_wrapper">
                    <input type="checkbox" name="language[]" value="HTML" id="html"><label for="html">HTML</label>
                    <input type="checkbox" name="language[]" value="CSS" id="css"><label for="css">CSS</label>
                    <input type="checkbox" name="language[]" value="JavaScript" id="javascript"><label for="javascript">JavaScript</label>
                    <input type="checkbox" name="language[]" value="PHP" id="php"><label for="php">PHP</label>
                    <input type="checkbox" name="language[]" value="Java" id="java"><label for="java">Java</label>
                </div>

                <button class="c_font_bold">検索する</button>
            </div>
        </form>
    </div>
    <!-- ===== 検索フィールド表示時の黒背景 ===== -->
    <div class="search_black_back"></div>

    <!-- ===== Portfolio List ===== -->
    <div class="portfolio_list">
        <!-- ===== ポートフォリオの一塊 ===== -->
        @foreach($posts as $post)
        <div class="portfolio">
            <div class="portfolio_background">
                <div class="portfolio_img">
                    <img src="{{ asset($post -> img_url) }}" alt="" />
                    <div class="img_hover_style c_font_bold">
                        <ion-icon name="camera-outline"></ion-icon>
                        詳細を見る
                    </div>
                </div>
                <div class="content">
                    <p><a href="{{ $post -> port_url }}">{{ $post -> port_url }}</a></p>
                    <h1 class="c_font_bold">
                        {{ $post -> name }}<span>{{ $post -> class }}</span>
                    </h1>
                    <h3>
                        <a href="{{ $post -> git_url }}">
                            <ion-icon name="logo-github"></ion-icon>
                            GitHub <span>{{ $post -> git_url }}</span>
                        </a>
                    </h3>
                    <h2>{{ $post -> comment }}</h2>
                    <h4>
                        <p>使用言語</p>
                        {{ $post -> use_language }}
                    </h4>
                </div>
                <ion-icon class="portfolio_close" name="arrow-back-outline"></ion-icon>
            </div>
        </div>
        @endforeach
    </div>

    <script src="script/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>