@extends('layouts.noheader')

@section('style')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('script/masonry.pkgd.min.js') }}"></script>
@endsection

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mt-5">
            <div class="mb-5 text-center">
                <a href="{{ url('/profile') }}" class="back-box d-flex align-items-center">
                    <ion-icon name="arrow-back-outline" style="font-size: 1.6rem" class="mr-2"></ion-icon>
                    <span style="font-size: 1.2rem">マイページへ</span>
                </a>
                <span style="font-size: 1.5rem; font-weight: bold;">投稿編集</span>
            </div>
            <form method="post" enctype="multipart/form-data" action="{{ url('post_submit_confirm') }}"
                class="validationForm" novalidate>
                @csrf
                <div class="text-center box-center">
                    <div id="dragDropArea">
                        <div class="drag-drop-inside">
                            <ion-icon name="add-outline" style="font-size: 5rem;" id="drag-drop-icon"></ion-icon><br>
                            <p class="drag-drop-info" id="drag-drop-info">画像をドラッグ＆ドロップ</p>
                            <p class="drag-drop-buttons">
                                <input id="fileInput" type="file" accept="image/*" value="ファイルを選択" name="photo"
                                    class="d-none required" onChange="photoPreview(event)">
                            </p>
                            <div id="previewArea">
                                <!-- url形式になってるか確認して、url形式だったら表示する。 -->
                                @if(preg_match("/(https:\/\/asoport-s3.s3.ap-northeast-3.amazonaws.com\/.*)|(img\/.*)/", $post->img_url) == 1)
                                <img src="{{ asset($post->img_url) }}" alt="image" width="100" id="previewImage">
                                <input type="hidden" name="photo" value="{{$post->img_url}}">
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- <input type="text" name="name" placeholder="名前" class="input-field required"><br> -->
                    <!-- <input type="email" name="mail" placeholder="メールアドレス" class="input-field required"><br> -->
                    <input type="hidden" name="id" value="{{ $post->id }}">
                    <input type="text" name="port" value="{{ $post->port_url }}" placeholder="ポートフォリオサイトのURL"
                        class="input-field required"><br>
                    <input type="text" name="git" value="{{ $post->git_url }}" placeholder="GitHubのURL"
                        class="input-field"><br>
                    <div class="lang-box">
                        <!-- 配列を作成し、langテーブルを新たに作成しフロントで5個判定で止める。 -->
                        @foreach($langs as $lang)
                        @if($lang->id == 6)
                        <div class="more-lang">
                            @endif
                            @if(in_array($lang->name, $checklangs))
                            <label class="lang-label"><input type="checkbox" name="lang[]" value="{{ $lang->name }}"
                                    class="required-lang" checked><span>{{ $lang->name }}</span></label>
                            @else
                            <label class="lang-label"><input type="checkbox" name="lang[]" value="{{ $lang->name }}"
                                    class="required-lang"><span>{{ $lang->name }}</span></label>
                            @endif
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
                    </div>
                    <input type="text" name="comment" placeholder="ひとこと" value="{{ $post->comment }}"
                        class="input-field required"><br>
                    <button type="submit" class="post-btn btn btn-lg">確認画面へ</button>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="{{ asset('js/dragDrop.js') }}"></script>
<script src="{{ asset('js/editValidation.js') }}"></script>
@endsection('content')