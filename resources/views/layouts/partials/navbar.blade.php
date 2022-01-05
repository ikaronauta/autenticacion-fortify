<nav>
    @guest
        <a href="#">Iniciar Sesion</a>
        <a href="{{route('register')}}">Registrarse</a>
    @else
        <a href="#">Home</a>
    @endguest
</nav>