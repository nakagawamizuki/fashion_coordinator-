@extends('layouts.app')
@section('title', 'マイページ')
@section('content')
    　<h1 class="mypage">マイページ</h1>
      <form action="/profiles" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
          <label for="inputNickname">ニックネーム</label>
          <input type="text" name="nickname" class="form-control" id="inputNickname" placeholder="ニックネーム" required="required">
        </div>
        <div class="form-group">
          <label for="inputBirthday">生年月日</label>
          <input type="date" name="birthday" class="form-control" id="inputBirthday" placeholder="◯/◯/◯" required="required">
        </div>
        <div class="form-group">
          <label for="inputHeight">身長</label>
          <input type="number" name="height" min="100" max="200" class="form-control" id="inputHeight" placeholder="〇〇cm" required="required">
        </div>
        <div class="form-group">
          <label for="inputPhonenumber">電話番号</label>
          <input type="tel" name="phone" class="form-control" id="inputStyle" placeholder="電話番号" required="required">
        </div>
        <div class="form-group">
          <label for="inputPhonenumber">ひとこと</label>
          <input type="text" name="comment" class="form-control" id="inputMessage" placeholder="お店の方へひとこと" required="required">
        </div>
        <button type="submit" class="btn btn-primary change">変更する</button>
      </form>
@endsection