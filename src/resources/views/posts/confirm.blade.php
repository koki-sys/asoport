@extends('layouts.noheader')

@section('style')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="script/masonry.pkgd.min.js"></script>
@endsection

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <a href="javascript:history.back();" class="back-box d-flex align-items-center">
                <ion-icon name="arrow-back-outline" style="font-size: 1.6rem" class="mr-2"></ion-icon>
                <span style="font-size: 1.2rem">戻る</span>
            </a>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mt-5">
            <div class="mb-3 text-center"><span style="font-size: 1.5rem; font-weight: bold;">内容を確認してください</span></div>
            <div class="mb-3 align-middle d-inline-block">
            
            </div>
            
            <form method="post" enctype="multipart/form-data" action="{{ $action }}" class="validationForm" novalidate>
                @csrf
                <input type="hidden" name="id" value="{{ $input_data['id'] }}">
                <div class="text-center box-center">
                    <div class="m-3 pt-4">
                        <div class="text-left"><span style="font-size: 1.1rem; font-weight: bold;">サムネイル画像</span></div>
                        <img src="{{$img_url}}" style="width:100%; border-radius:20px" class="mt-2">
                        <input name="img_url" value="{{$img_url}}" type="hidden">
                    </div>
                    <div class="m-3 pt-3">
                    <div class="text-left"><span style="font-size: 1.1rem; font-weight: bold;" >ポートフォリオサイトURL</span><span class="pl-4">{{$input_data['port']}}</span></div>
                        <input name="port" value="{{$input_data['port']}}" type="hidden">
                    </div>
                    <div class="m-3 pt-2">
                    <div class="text-left"><span style="font-size: 1.1rem; font-weight: bold;" >GitHub URL</span><span class="pl-4">{{$input_data['git']}}</span></div>
                        <input name="git" value="{{$input_data['git']}}" type="hidden">
                    </div>
                    <div class="m-3 pt-2">
                    <div class="text-left"><span style="font-size: 1.1rem; font-weight: bold;" >使用技術</span><span class="pl-4">{{$language}}</span></div>
                        <input name="lang" value="{{ $language }}" type="hidden">
                    </div>
                    <div class="m-3 pt-2">
                    <div class="text-left"><span style="font-size: 1.1rem; font-weight: bold;" >ひとこと</span><span class="pl-4">{{ $input_data['comment']}}</span></div>
                        <input name="comment" value="{{$input_data['comment']}}" type="hidden">
                    </div>
                    <button type="submit" class="post-btn btn btn-lg">{{ $btn_title }}</button>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="{{ asset('js/dragDrop.js') }}"></script>
<script src="{{ asset('js/createValidation.js') }}"></script>
@endsection('content')