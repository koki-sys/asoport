<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASOPort - Profile</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script/masonry.pkgd.min.js"></script>
</head>

<body class="light">
    <!-- ====== Header ====== -->
    <div class="header_wrapper">
        <header>
            <h1 class="c_pacifico"><a href="{{ url('/') }}">ASOPort</a></h1>

            <div class="header_icon_wrapper">
                <a href="{{ url('/create') }}">
                    <ion-icon class="plus_icon" id="add_portfolio" name="add-outline"></ion-icon>
                </a>
                <a href="{{ url('/profile') }}">
                    <ion-icon name="person-outline"></ion-icon>
                </a>
                <ion-icon class="theme_toggle" name="contrast-outline"></ion-icon>
            </div>
        </header>
    </div>

    <!-- ===== Profile ===== -->
    <section class="profile">
        <h1 class="c_font_bold">
            松浦豪毅<span>情報システム専攻科システムエンジニア専攻アドバンスコース</span>
        </h1>

        <h2 class="c_font_bold">2001127@s.asojuku.ac.jp</h2>
    </section>

    <!-- ===== Portfolio List ===== -->
    <section class="your_portfolio">
        <div class="your_portfolio_head">
            <h1>あなたの投稿</h1>
        </div>
        <div class="portfolio_list">
            <!-- ===== ポートフォリオの一塊 ===== -->
            <div class="portfolio">
                <div class="portfolio_background">
                    <div class="portfolio_img">
                        <img src="img/500x750.png" alt="" />
                        <div class="img_hover_style c_font_bold">
                            <ion-icon name="camera-outline"></ion-icon>
                            詳細を見る
                        </div>
                    </div>
                    <div class="content">
                        <p><a href="#">https://www.demo.demo.demo.demo.demo.demo.demo.demo.demo.demo</a></p>
                        <h1 class="c_font_bold">
                            松浦豪毅<span>情報システム専攻科システムエンジニア専攻アドバンスコース</span>
                        </h1>
                        <h3>
                            <a href="/">
                                <ion-icon name="logo-github"></ion-icon>
                                GitHub <span>https://www.github.demo.demo.demo.demo.demo.demo.demo.demo.demo.demo.demo</span>
                            </a>
                        </h3>
                        <h2>
                            ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ
                        </h2>
                        <h4>
                            <p>使用言語</p>
                            HTML / CSS/ JavaScript / PHP / React / Next.js / microCMS
                        </h4>
                    </div>
                    <ion-icon class="portfolio_close" name="arrow-back-outline"></ion-icon>
                </div>
            </div>
            <div class="portfolio">
                <div class="portfolio_background">
                    <div class="portfolio_img">
                        <img src="img/200x200.png" alt="" />
                        <div class="img_hover_style c_font_bold">
                            <ion-icon name="camera-outline"></ion-icon>
                            詳細を見る
                        </div>
                    </div>
                    <div class="content">
                        <p><a href="#">https://www.demo.demo</a></p>
                        <h1 class="c_font_bold">
                            松浦豪毅<span>情報工学科</span>
                        </h1>
                        <h3>
                            <a href="/">
                                <ion-icon name="logo-github"></ion-icon>
                                GitHub <span>https://www.github.demo</span>
                            </a>
                        </h3>
                        <h2>
                            ポートフォリオサイトを作りました。 ご覧いただけますと幸いです。
                            ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ
                        </h2>
                        <h4>
                            <p>使用言語</p>
                            HTML / CSS/ JavaScript
                        </h4>
                    </div>
                    <ion-icon class="portfolio_close" name="arrow-back-outline"></ion-icon>
                </div>
            </div>
            <div class="portfolio">
                <div class="portfolio_background">
                    <div class="portfolio_img">
                        <img src="img/1980x1440.png" alt="" />
                        <div class="img_hover_style c_font_bold">
                            <ion-icon name="camera-outline"></ion-icon>
                            詳細を見る
                        </div>
                    </div>
                    <div class="content">
                        <p><a href="#">https://www.demo.demo</a></p>
                        <h1 class="c_font_bold">
                            松浦豪毅<span>情報システム専攻科システムエンジニア専攻アドバンスコース</span>
                        </h1>
                        <h3>
                            <a href="/">
                                <ion-icon name="logo-github"></ion-icon>
                                GitHub <span>https://www.github.demo</span>
                            </a>
                        </h3>
                        <h2>ポートフォリオサイトを作りました。 ご覧いただけますと幸いです。</h2>
                        <h4>
                            <p>使用言語</p>
                            HTML / CSS/ JavaScript
                        </h4>
                    </div>
                    <ion-icon class="portfolio_close" name="arrow-back-outline"></ion-icon>
                </div>
            </div>
        </div>
    </section>

    <script src="script/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>