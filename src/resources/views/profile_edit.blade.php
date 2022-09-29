@extends('layouts.app')


<div class="header_wrapper">
        <header class="c_flex_center">
            <h1 class="c_pacifico"><a href="{{ url('/') }}">ASOPort</a></h1>
            <div class="search_wrapper">
                <ion-icon class="search_icon" name="search-outline"></ion-icon>
                <ion-icon class="close_icon" name="close-outline"></ion-icon>
            </div>
            <div class="header_icon_wrapper">
                <a href="{{ url('/create') }}">
                    <ion-icon class="plus_icon" id="add_portfolio" name="add-outline"></ion-icon>
                </a>
                <a href="{{ url('/profile') }}">
                    <ion-icon name="person-outline"></ion-icon>
                </a>
                <ion-icon class="theme_toggle" name="contrast-outline"></ion-icon>
            </div>
        </header>
</div>

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
            
            <form method="post" enctype="multipart/form-data" action="#" class="validationForm" novalidate>
                @csrf
                <div class="text-center box-center">
                    <input type="text" name="name" placeholder="名前" class="input-field required"><br>
                    <input type="text" name="class" placeholder="学科" class="input-field required"><br>
                    
                    <button type="submit" class="post-btn btn btn-lg mt-5">確定する</button>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<script src="{{ mix('js/dragDrop.js') }}"></script>
<script src="{{ mix('js/createValidation.js') }}"></script>
@endsection('content')