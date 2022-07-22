$(function(){

    // ===== 検索トグル =====
    $(".search_wrapper").on("click", function(){
        $(this).toggleClass("active");
        $(".search_field").toggleClass("active");
        if($(this).hasClass("active")) {
            $(".search_black_back").fadeIn()
        }else {
            $(".search_black_back").fadeOut()
        }
    });

    $(".portfolio_close").on("click", function () {
        $(".portfolio_list").children("div").removeClass("img_horizon img_vertical active c_flex_center");
        $(".portfolio_list").removeClass("active");
        return false;
    });

    $(window, ".portfolio_list").on("load imagesLoaded", function () { // ウィンドウを更新した後に画像サイズを取得
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
    });
});