@extends('layouts.app')

@section('style')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="script/masonry.pkgd.min.js"></script>
@endsection

@section('content')
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