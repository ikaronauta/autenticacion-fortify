@extends('layouts.base')

@section('title', 'Verificiación Email')

@section('content')

    <h1>Verificación Email</h1><br>

    @if (session('status') == 'verification-link-sent')
        <p><b>Hemos enviado un nuevo correo de verificación!</b></p>
        <br>
    @else
        <p><b>Hemos enviado un correo electrónico de verificación!</b></p>
        <br>
    @endif

    <p>Para poder terminar el proceso de registro debe dar el clic en el boto de <b>confirmar correo electrónico.</b></p>
    <p>En caso de no encontrar el mensaje en su bandeja de entrada, por favor revisar la bandeja de correos no deseados o de Spam.</p><br>

    <form action="{{route('verification.send')}}" method="post">
        @csrf
        <input type="submit" value="Nuevo Correo">
    </form>
@endsection