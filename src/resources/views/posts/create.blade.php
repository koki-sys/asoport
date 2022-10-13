@extends('layouts.noheader')

@section('style')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="script/masonry.pkgd.min.js"></script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="mb-3">
                <a href="{{ url('/') }}" class="back-box back-allow">
                    <div style="font-size: 2rem;">
                        <h4>一覧画面へ</h4>
                    </div>
                </a>
            </div>
            <form method="post" enctype="multipart/form-data" action="{{ url('post_submit') }}" class="validationForm"
                novalidate>
                @csrf
                <div class="text-center box-center">
                    <div id="dragDropArea">
                        <div class="drag-drop-inside">
                            <ion-icon name="add-outline" style="font-size: 10rem;" id="drag-drop-icon"></ion-icon><br>
                            <p class="drag-drop-info" id="drag-drop-info">画像をドラッグ＆ドロップ</p>
                            <p class="drag-drop-buttons">
                                <input id="fileInput" type="file" accept="image/*" value="ファイルを選択" name="photo"
                                    class="d-none required" onChange="photoPreview(event)">
                            </p>
                            <div id="previewArea"></div>
                        </div>
                    </div>
                    <!-- <input type="text" name="name" placeholder="名前" class="input-field required"><br> -->
                    <!-- <input type="email" name="mail" placeholder="メールアドレス" class="input-field required"><br> -->
                    <input type="text" name="port" placeholder="ポートフォリオサイトのURL" class="input-field required"><br>
                    <input type="text" name="git" placeholder="GitHubのURL" class="input-field"><br>
                    <div class="lang-box">
                        <!-- 検索画面で作る人へ ここから参考にしてください。 -->
                        <!-- 配列を作成し、langテーブルを新たに作成しフロントで5個判定で止める。 -->
                        @foreach($langs as $lang)
                        @if($lang->id == 6)
                        <div class="more-lang">
                            @endif
                            <label class="lang-label"><input type="checkbox" name="lang[]" value="{{ $lang->name }}"
                                    class="required-lang"><span>{{ $lang->name }}</span></label>
                            @if($lang->id % 3 == 0 && $lang->id
                            < 6) <br />
                            @elseif(($lang->id - 5) % 3 == 0 && $lang->id > 6)
                            <br />
                            @endif

                            @if($lang->id == count($langs))
                        </div>
                        @endif
                        @endforeach
                        <p class="more"></p>
                        <!-- 検索画面で作る人へ ここまで -->
                    </div>
                    <input type="text" name="comment" placeholder="ひとこと" class="input-field required"><br>
                    <button type="submit" class="post-btn btn btn-lg">投稿する</button>
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