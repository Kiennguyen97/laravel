<nav>
    <ul>
        <li><a href="{{ route('home') }}" class="nav {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>
