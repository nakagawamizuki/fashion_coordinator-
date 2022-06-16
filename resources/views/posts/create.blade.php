@extends('layouts.app')
@section('title', '質問一覧')
@section('content')
    <div class="text-center">
        <h1 class="new">質問一覧</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => ['posts.store'], 'files' => true]) !!}
                <div class="form-group">
                    {!! Form::label('title', 'タイトル') !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('content', '相談したいこと') !!}
                    {!! Form::textarea('content',  old('content'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('style', '希望のスタイル') !!}
                    {!! Form::text('style',  old('style'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('image', '相談したい服') !!}
                    {!! Form::file('image') !!}
                </div>

                {!! Form::submit('投稿', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection