@extends('layouts.noheader')

@section('style')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="script/masonry.pkgd.min.js"></script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="mb-3 align-middle d-inline-block">
                <a href="javascript:history.back();" class="back-box d-flex align-items-center">
                    <ion-icon name="arrow-back-outline" style="font-size: 1.6rem" class="mr-2"></ion-icon>
                    <span style="font-size: 1.2rem">戻る</span>
                </a>
            </div>
            <form method="post" enctype="multipart/form-data" action="{{ $action }}" class="validationForm" novalidate>
                @csrf
                <input type="hidden" name="id" value="{{ $input_data['id'] }}">
                <div class="text-center box-center">
                    <div class="m-3">
                        <label class="confirm-item">画像:</label>
                        <img src="{{$img_url}}" style="width:75%;">
                        <input name="img_url" value="{{$img_url}}" type="hidden">
                    </div>
                    <div class="m-3">
                        <label class="confirm-item">サイトURL：</label>
                        <span>{{$input_data['port']}}</span>
                        <input name="port" value="{{$input_data['port']}}" type="hidden">
                    </div>
                    <div class="m-3">
                        <label class="confirm-item">github：</label>
                        <span>{{$input_data['git']}}</span>
                        <input name="git" value="{{$input_data['git']}}" type="hidden">
                    </div>
                    <div class="m-3">
                        <label class="confirm-item">使用言語：</label>
                        <span>{{$language}}</span>
                        <input name="lang" value="{{ $language }}" type="hidden">
                    </div>
                    <div class="m-3">
                        <label class="confirm-item">コメント：</label>
                        <span>{{ $input_data['comment']}}</span>
                        <input name="comment" value="{{$input_data['comment']}}" type="hidden">
                    </div>
                    <button type="submit" class="post-btn btn btn-lg">{{ $btn_title }}</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="{{ asset('js/dragDrop.js') }}"></script>
<script src="{{ asset('js/createValidation.js') }}"></script>
@endsection('content')