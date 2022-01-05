@extends('layouts.base')

@section('title', 'Login')
    
@section('content')
    <h1>Login</h1>

    @if (session('status'))
        <small>
            {{session('status')}}
            <br>
        </small>
        <br>
    @endif

    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" autofocus requiered><br>
            @error('email')
                <small>
                    {{$message}}
                </small>
                <br>
            @enderror
        </div><br>
        
        <div class="form-group">
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" required><br>
            @error('password')
                <small>
                    {{$message}}
                </small>
                <br>
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