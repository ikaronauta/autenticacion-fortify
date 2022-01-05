<nav>
    <a href="/">Home</a>
    @guest
        <a href="{{route('login')}}">Login</a>
        <a href="{{route('register')}}">Register</a>
    @else
        <form action="{{route('logout')}}" method="post" style="display: inline">
            @csrf
            <a href="#" onclick="this.closest('form').submit()">Logout</a>
        </form>
    @endguest
</nav>