<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title> @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="icon" href="{{ asset('images/favicon.ico')}} ">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
        <header class="mb-4">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <!-- ホームへ戻るリンク。ブランドロゴなどを置く。 -->
      <a href="#" class="navbar-brand">P&amp;K</a>
      <!-- 横幅が狭いときに出るハンバーガーボタン -->
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!--メニュー項目-->
      <div class="collapse navbar-collapse" id="nav-bar">
        <ul class="navbar-nav">
        　@if(Auth::check())
        　
        　<li class="nav-item active">
            <a href="#" class="nav-link">マイページ</a>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link">お気に入り</a>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link">会員情報の確認・変更</a>
          </li>
          <li class="nav-item dropdown">
            <!--<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">A</a>-->
            <!--<div class="dropdown-menu">-->
            <!--    <a class="dropdown-item" href="#">B</a>-->
            <!--    <a class="dropdown-item" href="#">C</a>-->
            <!--    <a class="dropdown-item" href="#">D</a>-->
            <!--    <a class="dropdown-item" href="#">E</a>-->
            <!--</div>-->
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link">お問い合わせ</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">ログアウト</a>
          </li>
          @else
          <li class="nav-item active">
            <a href="https://4a712155da2746ad8379819c8fd62f11.vfs.cloud9.ap-northeast-1.amazonaws.com/_static/APP/login.html" class="nav-link">ログイン</a>
          </li>
          <li class="nav-item active">
            <a href="https://4a712155da2746ad8379819c8fd62f11.vfs.cloud9.ap-northeast-1.amazonaws.com/_static/APP/touroku.html" class="nav-link">新規会員登録</a>
          </li>
        　@endif
        </ul>
      </div>
    </nav>　　
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="キーワードから探す" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>
        </header>
        
        <div class="container">
            @include('commons.flash_message')
            @include('commons.error_messages')
            @yield('content')
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>