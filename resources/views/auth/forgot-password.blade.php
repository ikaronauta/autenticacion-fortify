@extends('layouts.base')

@section('title', 'Reestablecer contraseña')
    
@section('content')
    <h1>Reestablecer Contraseña</h1>

    <form action="{{route('password.email')}}" method="post">
        @csrf

        @if (session('status'))
            <small>
                {{session('status')}}
                <br>
            </small>
            <br>
        @endif

        <div class="form-group">
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" autofocus required value="{{old('email')}}"><br>
            @error('email')
                <small>
                    {{$message}}
                    <br>
                </small>
                <br>
            @enderror
        </div><br>

        <div class="form-group">
            <input type="submit" value="Send">
        </div>
    </form>
@endsection