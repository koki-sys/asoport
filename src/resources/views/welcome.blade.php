@extends('layouts.app')

@section('style')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- ===== Portfolio List ===== -->
<div class="portfolio_list">
    <!-- ===== ポートフォリオの一塊 ===== -->
    @foreach($posts as $post)
    <div class="portfolio">
        <div class="portfolio_background">
            <div class="portfolio_img">
                <img class="lazy" src="{{ asset($post -> img_url) }}" alt=""
                    data-original="{{ asset($post -> img_url) }}" />
                <div class="img_hover_style c_font_bold">
                    <ion-icon name="camera-outline"></ion-icon>
                    詳細を見る
                </div>
            </div>
            <div class="content">
                <p>
                    <a href="{{ $post -> port_url }}" class="portfolio_link">{{ $post -> port_url }}</a>
                    <span class="detail_port_date">
                        {{ \Carbon\Carbon::parse($post->created_at)->format("Y/m/d") }}作成
                    </span>
                </p>
                <h1 class="c_font_bold">
                    {{ $post -> name }}<span>{{ $post -> class }}</span>
                </h1>
                <h3>
                    @if(isset($post->git_url))
                    <a href="{{ $post -> git_url }}" class="portfolio_link">
                        <ion-icon name="logo-github"></ion-icon>
                        GitHub <span>{{ $post -> git_url }}</span>
                    </a>
                    @endif
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