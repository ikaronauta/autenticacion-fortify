@extends('layouts.base')

@section('title', 'Registro')
    
@section('content')
    <h1>Registro</h1>

    <form action="{{route('register')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" autofocus placeholder="Name..." required value="{{old('name')}}"><br>
            @error('name')
                <small>
                    {{$message}}
                    <br>
                </small>
                <br>
            @enderror
            <br>
        </div>

        <div class="form-group">
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="Email..." required value="{{old('email')}}"><br>
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
                    <br>
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
                    <br>
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