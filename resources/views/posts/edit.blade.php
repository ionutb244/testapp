@extends('layouts.app')
<!-- Editeaza o postare -->
@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
    <!-- Form pentru titlul postarii -->
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title',$post->title, ['class' => 'form-control', 'placeholder' =>'Title'])}}
        </div>
        <!-- Form pentru body-ul postarii -->
        <div class="form-group">
                {{Form::label('body','Body')}}
                {{Form::textarea('body',$post->body, ['id' => 'article-ckeditor' , 'class' => 'form-control', 'placeholder' =>'Body text'])}}
        </div>
        <!-- Form pentru imaginea postarii -->
        <div class="form-group">
                {{Form::file('cover_image')}}
        </div>
        <!-- Form pentru butonul Submit -->
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection