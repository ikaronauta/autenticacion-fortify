@extends('layouts.base')

@section('title', 'Home')
    
@section('content')
    <h1>Home</h1>

    @auth
        <p>Bienvenido <b>{{auth()->user()->name}}</b>
    @endauth
@endsection