@extends('layouts.base')

@section('title', 'Nueva contraseña')

@section('content')
    <h1>Nueva Contrasñea</h1>

    <form action="{{route('password.update')}}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{request()->route('token')}}">

        <div class="form-group">
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="Email..." autofocus required value="{{old('email')}}"><br>
            @error('email')
                <small>
                    {{$message}}
                    <br>
                </small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Ej. Abc$123!" required><br>
            @error('password')
                <small>
                    {{$message}}
                </small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Password Confirmation</label><br>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Ej. Abc$123!" required><br>
            @error('password_confirmation')
                <small>
                    {{$message}}
                </small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
            <input type="submit" value="Send">
        </div>
    </form>
@endsection