<nav class="navbar">
    <div class="logo">ZSH</div>

    <div class="menu">
        <a href="/">Home</a>
        <a href="#">Sobre</a>
        <a href="#">Contato</a>

        @auth
            <a href="/dashboard">Dashboard</a>
        @else
            <a href="{{ route('login') }}">Login</a>
        @endauth
    </div>
</nav>  