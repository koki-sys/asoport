$(function () {

    // ===== 検索トグル =====
    $(".search_wrapper").on("click", function () {
        // 検索ボタンの不具合があったため、下のコードをコメントアウトしてます。
        // $("*").removeClass("active");
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
        // ボタンの不具合があったため、下のコードをコメントアウトしてます。
        // $("*").removeClass("active");
        if ($(".search_wrapper").hasClass("active")) {
            $(".search_wrapper").toggleClass("active");
            $(".search_field").toggleClass("active");
            $(".search_black_back").toggleClass("active");
        }
        $(".menu").toggleClass("active");
        $(".search_black_back").toggleClass("active");
    });

    // ===== 表示/非表示、削除ボタンのポップアップ =====
    $('.portfolio_show').on("click", function () {
        $(".id_info").remove();
        $(".delete_btn").remove();
        // アイコンからport_idを取得しURLに変換
        const portId = $(this).data('id');

        //ぼたんとか情報をまとめて追加
        $("<input>").attr({
            type: 'hidden',
            name: 'id',
            class: 'id_info',
            value: portId
        }).appendTo(".public_off_form");
        $("<input>").attr({
            type: 'submit',
            value: '非公開にする',
            class: 'c_font_bold delete_btn'
        }).appendTo(".public_off_form");

        $(".hide_popup").toggleClass("active");
        $(".search_black_back").toggleClass("active");
    });
    $('.portfolio_hide').on("click", function () {

        $(".id_info").remove();
        $(".delete_btn").remove();
        // アイコンからport_idを取得しURLに変換
        const portId = $(this).data('id');

        //ぼたんとか情報をまとめて追加
        $("<input>").attr({
            type: 'hidden',
            name: 'id',
            class: 'id_info',
            value: portId
        }).appendTo(".public_on_form");
        $("<input>").attr({
            type: 'submit',
            value: '公開にする',
            class: 'c_font_bold delete_btn'
        }).appendTo(".public_on_form");

        $(".show_popup").toggleClass("active");
        $(".search_black_back").toggleClass("active");
    });

    $('.portfolio_delete').on("click", function () {
        // ポートフォリオ削除するときの処理を追加
        $(".id_info").remove();
        $(".delete_btn").remove();

        // アイコンからport_idを取得
        const portId = $(this).data('id');

        //ぼたんとか情報をまとめて追加
        $("<input>").attr({
            type: 'hidden',
            name: 'id',
            class: 'id_info',
            value: portId
        }).appendTo(".delete_form");
        $("<input>").attr({
            type: 'submit',
            value: '削除する',
            class: 'c_font_bold delete_btn'
        }).appendTo(".delete_form");

        $(".delete_popup").toggleClass("active");
        $(".search_black_back").toggleClass("active");
    });
    $('.popup_close').on("click", function () {
        $(".portfolio_popup").removeClass("active");
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

    $("img.lazy").lazyload();
    $(window).on("load", function () {
        $(".portfolio_list").imagesLoaded(function () {
            // Masonryの関数
            $('.portfolio_list').masonry({ //オプション指定箇所
                itemSelector: '.portfolio', //コンテンツを指定
                fitWidth: true, //コンテンツ数に合わせ親の幅を自動調整
            });
        });
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

    $(".portfolio_operate ion-icon").on("click", function () {
        // alert("削除が押されました。")
        $(".portfolio_list").children("div").removeClass("img_horizon img_vertical active c_flex_center");
        $(".portfolio_list").removeClass("active");
        return false;
    });
})
// });

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

$(".portfolio_edit").on("click", function () {
    location.href = `post_edit/${$(this).data('id')}`;
});

//メール表示非表示切り替え
$(".mail_show").click(function () {
    $(".mail_show").css("display", "none");
    $(".mail_hide").css("display", "table-cell");
});
$(".mail_hide").click(function () {
    $(".mail_hide").css("display", "none");
    $(".mail_show").css("display", "table-cell");
});

//メール表示非表示フラグ更新
$(".post-btn").click(function () {
    var flag = 1;
    if ($('.mail_show').css('display') == 'none') {
        flag = 0;
    }
    $('#flag').val(flag);
});

//プロフィールのメール公開の処理※<hidden>で値を持たせる
$(".mail_public").click(function(){
    $(".mail_change").remove();

    //ぼたんとか情報をまとめて追加
    $("<input>").attr({
        type: 'hidden',
        name: 'mail_public',
        class: 'mail_change',
        value: 1
    }).appendTo(".validationForm");
});

//プロフィールのメール非公開の処理※<hidden>で値を持たせる
$(".mail_unpublic").click(function(){
    $(".mail_change").remove();

    //ぼたんとか情報をまとめて追加
    $("<input>").attr({
        type: 'hidden',
        name: 'mail_public',
        class: 'mail_change',
        value: 0
    }).appendTo(".validationForm");
});
