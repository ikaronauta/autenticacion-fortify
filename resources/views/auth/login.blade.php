@extends('layouts.base')

@section('title', 'Login')
    
@section('content')
    <h1>Login</h1>

    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" autofocus requiered><br>
            @error('email')
                {{$message}}
                <br>
            @enderror
        </div><br>
        
        <div class="form-group">
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" required><br>
            @error('passeord')
                {{$mesa}}
            @enderror
            <br>
        </div>

        <div class="form-group">
            <input type="submit" value="Login">
        </div><br>

        <div class="form-group">
            <small>
                <a href="{{route('password.request')}}">Reestablecer Contraseña</a>
            </small>
        </div>
    </form>
@endsection