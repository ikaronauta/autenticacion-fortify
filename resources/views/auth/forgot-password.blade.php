@extends('layouts.base')

@section('title', 'Reestablecer contraseña')
    
@section('content')
    <h1>Reestablecer Contraseña</h1>

    <form action="{{route('password.email')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" autofocus required value="{{old('email')}}"><br>
            @error('email')
                {{$message}}
                <br>
            @enderror
        </div><br>

        <div class="form-group">
            <input type="submit" value="Sent">
        </div>
    </form>
@endsection