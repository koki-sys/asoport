<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <div class="flex-center position-ref full-height">
          <div class="content">
            <!-- test data -->
            <form method="post" enctype="multipart/form-data" action="{{ url('post_submit') }}">
            @csrf
              <input type="file" name="img"><br>
              <input type="text" name="name">名前<br>
              <input type="text" name="class">学科<br>
              <input type="email" name="mail">メールアドレス<br>
              <input type="text" name="port">ポートフォリオサイトのURL<br>
              <input type="text" name="git">GitHubのURL<br>
              <input type="radio" name="html" value="html">HTML<br>
              <input type="radio" name="css" value="css">CSS<br>
              <input type="radio" name="php" value="php">PHP<br>
              <input type="radio" name="java" value="java">JAVA<br>
              <input type="radio" name="js" value="js">JavaScript<br>
              <input type="text" name="comment">ひとこと<br>
              <button type="submit">送信する</button>
            </form>
            <!-- test data -->
          </div>
      </div>
    </body>
</html>
