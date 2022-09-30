@extends('layouts.app')

@section('content')
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
                <p><a href="{{ $post -> port_url }}" class="portfolio_link">{{ $post -> port_url }}</a></p>
                <h1 class="c_font_bold">
                    {{ $post -> name }}<span>{{ $post -> class }}</span>
                </h1>
                <h3>
                    <a href="{{ $post -> git_url }}" class="portfolio_link">
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
@endsection