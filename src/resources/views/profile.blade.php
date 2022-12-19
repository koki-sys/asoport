@extends('layouts.app')

@section('style')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
                    <img class="lazy" src="{{ asset($post -> img_url) }}" alt="" data-original="{{ asset($post -> img_url) }}"/>
                    <div class="img_hover_style c_font_bold">
                        <ion-icon name="camera-outline"></ion-icon>
                        詳細を見る
                    </div>
                    <div class="portfolio_operate">
                        <ion-icon class="portfolio_edit" name="pencil-outline" data-id="{{ $post->id }}"></ion-icon>
                        <!-- button押下時にポップアップに情報を作成 -->
                        <ion-icon class="portfolio_delete" name="trash-outline" data-id="{{ $post->id }}"></ion-icon>
                        @if(($post -> public_flg) == 1)
                        <!-- 公開に設定している場合は↓のアイコンを表示 -->
                        <ion-icon class="portfolio_show" name="eye-outline" data-id="{{ $post->id }}"></ion-icon>
                        @elseif(($post -> public_flg) == 0)
                        <!-- 非公開に設定している場合は↓のアイコンを表示 -->
                        <ion-icon class="portfolio_hide" name="eye-off-outline" data-id="{{ $post->id }}"></ion-icon>
                        @endif
                    </div>
                </div>
                <div class="content">
                    <p><a href="{{ $post->port_url }}">{{ $post->port_url }}</a></p>
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

<div class="portfolio_popup hide_popup">
    <h1 class="c_font_bold">この投稿を非公開にしますか</h1>
    <form action="" method="POST" class="public_off_form">
        @csrf

    </form>
        <ion-icon class="popup_close" name="close-outline"></ion-icon>
</div>
<div class="portfolio_popup show_popup">
    <h1 class="c_font_bold">この投稿を公開しますか</h1>
    <form action="" method="POST" class="public_on_form">
        @csrf

    </form>
    <!--<a class="c_font_bold" href="/public_on/?data-id">公開する</a> -->
    <ion-icon class="popup_close" name="close-outline"></ion-icon>
</div>
<div class="portfolio_popup delete_popup">
    <h1 class="c_font_bold">この投稿を削除しますか</h1>
    <!-- 削除Formに変更 -->
    <form action="{{ url('/post/delete') }}" method="POST" class="delete_form">
        @csrf
        <!-- 情報を削除アイコンクリック時に追加 -->
    </form>
    <ion-icon class="popup_close" name="close-outline"></ion-icon>
</div>

@endsection