<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASOPort</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script/masonry.pkgd.min.js"></script>
</head>

<body>
    <!-- ====== Header ====== -->
    <div class="header_wrapper">
        <header class="c_flex_center">
            <h1 class="c_pacifico">ASOPort</h1>
            <div class="search_wrapper">
                <ion-icon class="search_icon" name="search-outline"></ion-icon>
                <ion-icon class="close_icon" name="close-outline"></ion-icon>
            </div>
            <ion-icon class="plus_icon" id="add_portfolio" name="add-outline"></ion-icon>
        </header>
    </div>

    <!-- ===== Search Field ===== -->
    <div class="search_field c_font_bold">
        <!-- <form action="" method=""> -->
        <div class="search_input_wrapper c_font_bold">
            <label class="" for="keyword">キーワード検索</label>
            <input class="c_font_regular" type="text" name="keyword" id="keyword">

            <label class="">使用言語</label>
            <div class="checkbox_wrapper">
                <input type="checkbox" name="html" id="html"><label for="html">HTML</label>
                <input type="checkbox" name="css" id="css"><label for="css">CSS</label>
                <input type="checkbox" name="javascript" id="javascript"><label for="javascript">JavaScript</label>
                <input type="checkbox" name="php" id="php"><label for="php">PHP</label>
                <input type="checkbox" name="java" id="java"><label for="java">Java</label>
            </div>

            <button class="c_font_bold">検索する</button>
        </div>
        <!-- </form> -->
    </div>
    <!-- ===== 検索フィールド表示時の黒背景 ===== -->
    <div class="search_black_back"></div>

    <!-- ===== Portfolio List ===== -->
    <div class="portfolio_list">
        <!-- ===== ポートフォリオの一塊 ===== -->
        <div class="portfolio">
            <div class="portfolio_background">
                <div class="portfolio_img">
                    <img src="img/500x750.png" alt="" />
                    <div class="img_hover_style">
                    </div>
                </div>
                <div class="content">
                    <p><a href="/">https://www.demo.demo</a></p>
                    <h1 class="c_font_bold">
                        <a href="/">松浦豪毅<span>情報工学科</span></a>
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
            </div>
        </div>
        <div class="portfolio">
            <div class="portfolio_background">
                <div class="portfolio_img">
                    <img src="img/200x200.png" alt="" />
                    <div class="img_hover_style">
                    </div>
                </div>
                <div class="content">
                    <p>https://www.demo.demo</p>
                    <h1 class="c_font_bold">
                        松浦豪毅<span>情報工学科</span>
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
            </div>
        </div>
        <div class="portfolio">
            <div class="portfolio_background">
                <div class="portfolio_img">
                    <img src="img/1500x1000.png" alt="" />
                    <div class="img_hover_style">
                    </div>
                </div>
                <div class="content">
                    <p>https://www.demo.demo</p>
                    <h1 class="c_font_bold">
                        松浦豪毅<span>情報工学科</span>
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
            </div>
        </div>
        <div class="portfolio">
            <div class="portfolio_background">
                <div class="portfolio_img">
                    <img src="img/1500x1000.png" alt="" />
                    <div class="img_hover_style">
                    </div>
                </div>
                <div class="content">
                    <p>https://www.demo.demo</p>
                    <h1 class="c_font_bold">
                        松浦豪毅<span>情報工学科</span>
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
            </div>
        </div>
        <div class="portfolio">
            <div class="portfolio_background">
                <div class="portfolio_img">
                    <img src="img/1980x1440.png" alt="" />
                    <div class="img_hover_style">
                    </div>
                </div>
                <div class="content">
                    <p><a href="/">https://www.demo.demo</a></p>
                    <h1 class="c_font_bold">
                        松浦豪毅<span>情報工学科</span>
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
            </div>
        </div>
    </div>

    <script src="script/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>