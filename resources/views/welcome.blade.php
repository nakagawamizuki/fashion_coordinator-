@extends('layouts.app')
@section('title', '自作アプリ')
@section('content')
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" data-interval="5000" data-wrap="true" data-pause="false">
      <ul class="carousel-indicators">
        <li data-target="carouselExampleInterval" data-slide-to="0" class="active"></li>
        <li data-target="carouselExampleInterval" data-slide-to="1"></li>
        <li data-target="carouselExampleInterval" data-slide-to="2"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('/images/summer.JPEG') }}" class="d-block" alt="summer.JPEG">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('/images/accessory2.jpg') }}" class="d-block" alt="accessory2.jpg">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('/images/denim1.jpg') }}" class="d-block" alt="denim1.jpg">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <!--<span class="visually-hidden">Previous</span>-->
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <!--<span class="visually-hidden">Next</span>-->
      </button>
    </div>
    <div>
      <h2>イチオシ</h2>
      <ul id="onepress">
        <li class="one">
          <a href="https://4a712155da2746ad8379819c8fd62f11.vfs.cloud9.ap-northeast-1.amazonaws.com/_static/APP/tshirt.html">
            <img src="images2/Tshirt.JPEG" alt="Tシャツ">
          </a>
        </li>
        <li class="one">
          <a href="https://4a712155da2746ad8379819c8fd62f11.vfs.cloud9.ap-northeast-1.amazonaws.com/_static/APP/denim.html">
            <img src="images2/denim1.jpg" alt="デニム">
          </a>
        </li>
        <li class="one">
          <a href="https://4a712155da2746ad8379819c8fd62f11.vfs.cloud9.ap-northeast-1.amazonaws.com/_static/APP/accessory.html">
            <img src="images2/accessory.JPEG" alt="アクセサリー">
          </a>
        </li>
      </ul>
    </div>
    <div class="category">
      <h2>カテゴリから探す</h2>
      <ul class="category">
        <li>
          <img src="images1/whiteT.jpg" alt="whiteT.jpg">
          <h3>トップス</h3>
        </li>
        <li>
          <img src="images1/denim.jpeg" alt="denim.jpeg">
          <h3>パンツ</h3>
        </li>
        <li>
          <img src="images1/skirt.webp" alt="skirt.webp">
          <h3>スカート</h3>
        </li>
        <li>
          <img src="images1/dress.webp" alt="dress.webp">
          <h3>ワンピース</h3>
        </li>
        <li>
          <img src="images1/coat.webp" alt="coat.webp">
          <h3>アウター</h3>
        </li>
      </ul>
    </div>
    <div>
      <h2>ランキング</h2>
      <!--いいね数が多いランキング-->
    </div>
@endsection