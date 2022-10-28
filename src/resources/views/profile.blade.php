@extends('layouts.app')

@section('style')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="script/masonry.pkgd.min.js"></script>
@endsection

@section('content')
<!-- ===== Profile ===== -->
<section class="profile">
    <h1 class="c_font_bold">
        {{ $user->name }}<span>{{ $user->class }}</span>
    </h1>

    <h2 class="c_font_bold">{{ $user->email }}</h2>
</section>

<!-- ===== Portfolio List ===== -->
<section class="your_portfolio">
    <div class="your_portfolio_head">
        <h1>あなたの投稿</h1>
    </div>
    <div class="portfolio_list">
        @foreach($posts as $post)
        <!-- ===== ポートフォリオの一塊 ===== -->
        <div class="portfolio">
            <div class="portfolio_background">
                <div class="portfolio_img">
                    <img src="{{ asset($post -> img_url) }}" alt="" />
                    <div class="img_hover_style c_font_bold">
                        <ion-icon name="camera-outline"></ion-icon>
                        詳細を見る
                    </div>
                    <div class="portfolio_operate">
                        <a href="{{ url('/post_edit/'.$post->id) }}" class="port_edit_link"><ion-icon class="portfolio_edit" name="pencil-outline"></ion-icon></a>
                        <!-- <a href="#"><ion-icon class="portfolio_delete" name="trash-outline"></ion-icon></a> -->
                    </div>
                </div>
                <div class="content">
                    <p><a href="#">{{ $post->port_url }}</a></p>
                    <h1 class="c_font_bold">
                        {{ $user->name }}<span>{{ $user->class }}</span>
                    </h1>
                    <h3>
                        <a href="/">
                            <ion-icon name="logo-github"></ion-icon>
                            GitHub <span>{{ $post->port_url }}</span>
                        </a>
                    </h3>
                    <h2>
                        {{ $post->comment }}
                    </h2>
                    <h4>
                        <p>使用言語</p>
                        {{ $post->use_language }}
                    </h4>
                </div>
                <ion-icon class="portfolio_close" name="arrow-back-outline"></ion-icon>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection