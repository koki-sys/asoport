@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="back-box mb-3">
                <a href="{{ url('/') }}">
                    <h4><i class="fa-solid fa-arrow-left fa-sm mr-2"></i>一覧画面へ</h4>
                </a>
            </div>
            <!-- create data 初まり -->
            <form method="post" enctype="multipart/form-data" action="{{ url('post_submit') }}">
                @csrf
                <div class="text-center box-center">
                    <div id="dragDropArea">
                        <div class="drag-drop-inside">
                            <i class="fa-light fa-plus fa-9x"></i><br>
                            <p class="drag-drop-info">画像をD&D</p>
                            <p class="drag-drop-buttons">
                                <input id="fileInput" type="file" accept="image/*" value="ファイルを選択" name="photo" class="d-none" onChange="photoPreview(event)">
                            </p>
                            <div id="previewArea"></div>
                        </div>
                    </div>
                    <input type="text" name="name" placeholder="名前" class="input-field"><br>
                    <input type="text" name="class" placeholder="学科" class="input-field"><br>
                    <input type="email" name="mail" placeholder="メールアドレス" class="input-field"><br>
                    <input type="text" name="port" placeholder="ポートフォリオサイトのURL" class="input-field"><br>
                    <input type="text" name="git" placeholder="GitHubのURL" class="input-field"><br>
                    <div class="lang-box">
                        <p>使用言語</p>
                        <label class="lang-label"><input type="checkbox" name="language" value="html"><span>HTML</span></label>
                        <label class="lang-label"><input type="checkbox" name="language" value="css"><span>CSS</span></label><br>
                        <label class="lang-label"><input type="checkbox" name="language" value="php"><span>PHP</span></label>
                        <label class="lang-label"><input type="checkbox" name="language" value="java"><span>JAVA</span></label>
                        <label class="lang-label"><input type="checkbox" name="language" value="javascript"><span>JAVASCRIPT</span></label>
                    </div>
                    <input type="text" name="comment" placeholder="ひとこと" class="input-field"><br>
                    <button type="submit" class="post-btn btn btn-lg">投稿する</button>
                </div>
            </form>
            <!-- create data 終わり -->
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<script src="{{ mix('js/dragDrop.js') }}"></script>
@endsection('content')