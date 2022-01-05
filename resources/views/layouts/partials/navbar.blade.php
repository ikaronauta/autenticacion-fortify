<nav>
    @guest
        <a href="{{route('login')}}">Iniciar Sesion</a>
        <a href="{{route('register')}}">Registrarse</a>
    @else
        <a href="#">Home</a>
    @endguest
</nav>