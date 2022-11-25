@extends('layouts.app')

@section('style')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="script/masonry.pkgd.min.js"></script>
@endsection

<section class="profile">
    <h1 class="c_font_bold">
        プロフィール編集
    </h1>
</section>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <form method="post" enctype="multipart/form-data" action="{{ url('prof_edit_submit') }}" class="validationForm" novalidate>
                @csrf
                <div class="text-center box-center">
                    <input type="text" name="name" placeholder="名前" class="input-field required" value="{{ $user->name }}"><br>
                    <input type="text" name="class" placeholder="学科" class="input-field required" value="{{ $user->class }}"><br>
                    <input type="hidden" id="flag" name="mail_flag" value="1"><br>
                    <div class="row">
                        <div class="col-10"><input type="text" name="email" placeholder="メール" class="input-field required" value="{{ $user->email }}"></div>
                        <div class="col-2 eye-wrapper">
                            <!-- 公開に設定している場合は↓のアイコンを表示 -->
                            <ion-icon name="eye-outline" class="mail_show" value="1"></ion-icon>
                            <!-- 非公開に設定している場合は↓のアイコンを表示 -->
                            <ion-icon name="eye-off-outline" class="mail_hide" value="0"></ion-icon>
                        </div>
                    </div>
                    <button type="submit" class="post-btn btn btn-lg mt-5">確定する</button>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<script src="{{ asset('js/editValidation.js') }}"></script>
@endsection('content')