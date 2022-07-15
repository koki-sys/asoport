@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="back-box">
            <h2>←一覧に戻る</h2>
        </div>
        <!-- create data 初まり -->
        <form method="post" enctype="multipart/form-data" action="{{ url('post_submit') }}">
            @csrf
            <div id="dragDropArea">
                <div class="drag-drop-inside">
                    <i class="fa-regular fa-plus fa-6x"></i>
                    <p class="drag-drop-info">画像をD&D</p>
                    <div id="previewArea"></div>
                </div>
            </div>
            <input type="text" name="name" placeholder="名前" class="input-field"><br>
            <input type="text" name="class" placeholder="学科"><br>
            <input type="email" name="mail" placeholder="メールアドレス"><br>
            <input type="text" name="port" placeholder="ポートフォリオサイトのURL"><br>
            <input type="text" name="git" placeholder="GitHubのURL"><br>
            <input type="radio" name="html" value="html" placeholder="HTML"><br>
            <input type="radio" name="css" value="css" placeholder="CSS"><br>
            <input type="radio" name="php" value="php" placeholder="PHP"><br>
            <input type="radio" name="java" value="java" placeholder="JAVA"><br>
            <input type="radio" name="js" value="js" placeholder="JavaScript"><br>
            <input type="text" name="comment" placeholder="ひとこと"><br>
            <button type="submit">送信する</button>
        </form>
        <!-- create data 終わり -->
    </div>
</div>
<script src="{{ mix('js/dragDrop.js') }}"></script>
@endsection('content')