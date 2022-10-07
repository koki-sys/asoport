@extends('layouts.noheader')

@section('style')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="script/masonry.pkgd.min.js"></script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="mb-3">
                <a href="{{ url('/') }}" class="back-box">
                    <h4><i class="fa-solid fa-arrow-left fa-sm mr-2"></i>一覧画面へ</h4>
                </a>
            </div>
            <form method="post" enctype="multipart/form-data" action="{{ url('post_submit') }}" class="validationForm" novalidate>
                @csrf
                <div class="text-center box-center">
                    <div id="dragDropArea">
                        <div class="drag-drop-inside">
                            <i class="fa-light fa-plus fa-9x" style="font-style: normal" id="drag-drop-icon"></i><br>
                            <p class="drag-drop-info" id="drag-drop-info">画像をD&D</p>
                            <p class="drag-drop-buttons">
                                <input id="fileInput" type="file" accept="image/*" value="ファイルを選択" name="photo" class="d-none required" onChange="photoPreview(event)">
                            </p>
                            <div id="previewArea"></div>
                        </div>
                    </div>
                    <!-- <input type="text" name="name" placeholder="名前" class="input-field required"><br> -->
                    <!-- <input type="email" name="mail" placeholder="メールアドレス" class="input-field required"><br> -->
                    <input type="text" name="port" placeholder="ポートフォリオサイトのURL" class="input-field required"><br>
                    <input type="text" name="git" placeholder="GitHubのURL" class="input-field required"><br>
                    <div class="lang-box">
                        <label class="lang-label"><input type="checkbox" name="html" value="html" class="required"><span>HTML</span></label>
                        <label class="lang-label"><input type="checkbox" name="css" value="css"><span>CSS</span></label><br>
                        <label class="lang-label"><input type="checkbox" name="php" value="php"><span>PHP</span></label>
                        <label class="lang-label"><input type="checkbox" name="java" value="java"><span>JAVA</span></label>
                        <label class="lang-label"><input type="checkbox" name="js" value="javascript"><span>JAVASCRIPT</span></label>
                    </div>
                    <input type="text" name="comment" placeholder="ひとこと" class="input-field required"><br>
                    <button type="submit" class="post-btn btn btn-lg">投稿する</button>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<script src="{{ asset('js/dragDrop.js') }}"></script>
<script src="{{ asset('js/createValidation.js') }}"></script>
@endsection('content')