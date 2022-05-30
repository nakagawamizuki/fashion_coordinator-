@extends('layouts.basic')
@section('title', '新規会員登録')
@section('content')
    <div class="text-center">
        <h1>新規会員登録</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            <form method="POST" action="/signup">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <p class="control-label">種別</p>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="role" id="role1" value="1" checked>
                        <label class="form-check-label" for="role1">店舗</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="role" id="role2" value="2">
                        <label class="form-check-label" for="role2">個人</label>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label for="name">名前</label>
                    <input type="text"  name="name" class="form-control" id="name">
                </div>

                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>

                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="password" name="password"  class="form-control" id="password">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">パスワードの確認</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                </div>

                <button type="submit" class="btn btn-primary btn-block">登録</button>
            </form>
        </div>
    </div>
@endsection