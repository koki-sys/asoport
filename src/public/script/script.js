$(function () {

    // ===== 検索トグル =====
    $(".search_wrapper").on("click", function () {
        if ($(".menu").hasClass("active")) {
            $(".menu").removeClass("active")
            $(".search_black_back").toggleClass("active");
        }
        $(this).toggleClass("active");
        $(".search_field").toggleClass("active");
        $(".search_black_back").toggleClass("active");
    });

    // menu
    $('.open_menu_icon').on("click", function () {
        if ($(".search_wrapper").hasClass("active")) {
            $(".search_wrapper").toggleClass("active");
            $(".search_field").toggleClass("active");
            $(".search_black_back").toggleClass("active");
        }
        $(".menu").toggleClass("active");
        $(".search_black_back").toggleClass("active");
    });

    // ===== ページロード時のテーマ検出 =====
    $(document).ready(function () {
        const theme = localStorage.getItem('theme');
        if (theme == "dark") {
            $("body").addClass("dark").removeClass("light");
        } else if (theme == "light") {
            $("body").addClass("light").removeClass("dark");
        }
    });

    // ===== ダークテーマ、ライトテーマ切り替えボタン =====
    $(".theme_toggle").on("click", function () {
        if ($("body").hasClass("light")) {
            $("body").addClass("dark").removeClass("light");
            localStorage.setItem('theme', 'dark');
        } else {
            $("body").addClass("light").removeClass("dark");
            localStorage.setItem('theme', 'light');
        }
    });

    $(".portfolio_close").on("click", function () {
        $(".portfolio_list").children("div").removeClass("img_horizon img_vertical active c_flex_center");
        $(".portfolio_list").removeClass("active");
        return false;
    });

    $(window).on("load", function () { // ウィンドウを更新した後に画像サイズを取得
        // Masonryの関数
        $('.portfolio_list').masonry({ //オプション指定箇所
            itemSelector: '.portfolio', //コンテンツを指定
            fitWidth: true, //コンテンツ数に合わせ親の幅を自動調整
        });

        $(".portfolio").on("click", function () {
            //ポートフォリオの画像サイズを取得
            var height = $(this).find("img").prop("naturalHeight");
            var width = $(this).find("img").prop("naturalWidth");

            //画像のアスペクト比に応じてポートフォリオ詳細画面の表示形式を変えるようにする
            if (height > width) {
                // 縦表示
                $(this).addClass("active img_vertical c_flex_center");
                $(".portfolio_list").addClass("active");
            } else {
                // 横表示
                $(this).addClass("active img_horizon c_flex_center");
                $(".portfolio_list").addClass("active");
            }

            return false;
        });

        // 詳細画面のリンクをクリックした時に遷移
        $(".portfolio_link").on("click", function () {
            window.open($(this).attr("href"), '_blank');
        });

        $(".portfolio_operate a").on("click", function () {
            // alert("削除が押されました。")
            $(".portfolio_list").children("div").removeClass("img_horizon img_vertical active c_flex_center");
            $(".portfolio_list").removeClass("active");
            return false;
        });
    });
});

$(document).click(function (event) {
    if ($(".search_black_back").hasClass("active")) {
        if ($(event.target).closest('.search_black_back').length) {
            $("*").removeClass("active");
        } else {
        }
    }
});

// もっと見るを押したときの処理
$(function () {
    $(".more").on("click", function () {
        $(this).toggleClass("on-click");
        $(".more-lang").slideToggle(300);
    });
});