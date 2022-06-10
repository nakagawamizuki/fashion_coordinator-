@extends('layouts.app')
@section('title', '投稿No. ' . $post->id . 'の編集')
@section('content')
    <div class="text-center">
        <h1>投稿No.  {{ $post->id }}の編集</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => ['posts.update', 'id' => $post->id ], 'files' => true, 'method' => 'PUT']) !!}
                <div class="form-group">
                    {!! Form::label('title', 'タイトル') !!}
                    {!! Form::text('title', $post->title ? $post->title : old('title'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('content', '相談したいこと') !!}
                    {!! Form::textarea('content',  $post->content ? $post->content : old('content'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('style', '希望のスタイル') !!}
                    {!! Form::text('style', $post->style ? $post->style : old('style'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('image', '相談したい服') !!}
                    {!! Form::file('image') !!}
                </div>

                {!! Form::submit('更新', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection