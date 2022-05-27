@extends('layouts.app')
@section('title', 'ログイン')
@section('content')
    

    <main class="form-signin w-100 m-auto">
        <form>
          <!--<img class="mb-4" src="../images/bootstrap-logo.svg" alt="" width="72" height="57" loading="lazy">-->
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="メールアドレス">
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="パスワード">
          </div>
          <div class="form-check mb-3">
            <label>
              <input type="checkbox" value="remember-me">情報を保存する
            </label>
          </div>
          <button class="w-100 btn btn-lg" type="submit">サインイン</button>
       </form>
      </main>
@endsection