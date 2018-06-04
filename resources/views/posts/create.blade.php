@extends('layouts.app')
<!-- Creeaza o postare -->
@section('content')
    <h1>Create Post</h1>
    <!-- Form pentru titlul postarii -->
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','', ['class' => 'form-control', 'placeholder' =>'Title'])}}
        </div>
        <!-- Form pentru body-ul postarii -->
        <div class="form-group">
                {{Form::label('body','Body')}}
                {{Form::textarea('body','', ['id' => 'article-ckeditor' , 'class' => 'form-control', 'placeholder' =>'Body text'])}}
        </div>
        <!-- Form pentru imaginea postarii -->
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        <!-- Form pentru butonul Submit -->
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection