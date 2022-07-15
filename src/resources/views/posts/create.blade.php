@extends('layouts.app')

@section('content')
<div class="container">
    <div class="back-box">
        <h2><i class="fa-solid fa-arrow-left fa-sm"></i>一覧画面へ</h2>
    </div>
    <!-- create data 初まり -->
    <form method="post" enctype="multipart/form-data" action="{{ url('post_submit') }}">
        @csrf
        <div class="text-center">
            <div id="dragDropArea">
                <div class="drag-drop-inside">
                    <i class="fa-light fa-plus fa-9x"></i><br>
                    <p class="drag-drop-info">画像をD&D</p>
                    <div id="previewArea"></div>
                </div>
            </div>
            <input type="text" name="name" placeholder="名前" class="input-field"><br>
            <input type="text" name="class" placeholder="学科" class="input-field"><br>
            <input type="email" name="mail" placeholder="メールアドレス" class="input-field"><br>
            <input type="text" name="port" placeholder="ポートフォリオサイトのURL" class="input-field"><br>
            <input type="text" name="git" placeholder="GitHubのURL" class="input-field"><br>
            <input type="radio" name="html" value="html" placeholder="HTML"><br>
            <input type="radio" name="css" value="css" placeholder="CSS"><br>
            <input type="radio" name="php" value="php" placeholder="PHP"><br>
            <input type="radio" name="java" value="java" placeholder="JAVA"><br>
            <input type="radio" name="js" value="js" placeholder="JavaScript"><br>
            <input type="text" name="comment" placeholder="ひとこと" class="input-field"><br>
            <button type="submit" class="post-btn btn btn-lg">投稿する</button>
        </div>
    </form>
    <!-- create data 終わり -->
</div>
<script src="{{ mix('js/dragDrop.js') }}"></script>
@endsection('content')