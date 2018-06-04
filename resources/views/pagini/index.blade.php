@extends('layouts.app')
<!-- afiseaza paragrafele introduse de la tastatura in pagina si butoanele de login si register -->
@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>To login or register click on one of the buttons below.</p>
        <p>If you are already loged in</p>
        <p>to post something on the blog click on your name from top right then click post something.</p>
        <h3>Important!!! Read description before continue.</h3>
        <h3>ENJOY!!!</h3>
        <p> <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> 
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
    </div>
@endsection