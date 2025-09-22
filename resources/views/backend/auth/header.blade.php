<header class="header">
    <nav class="nav container">
        <a class="logo" href="/dashboard">CAKE</a>
        <div class="nav_menu">
            <ul class="nav_list">
                <li class="nav_item">
                    <a href="/#home" class="nav_link">Home</a>
                </li>
                <li class="nav_item">
                    <a href="/#about" class="nav_link">About us</a>
                </li>
                <li class="nav_item">
                    <a href="/#popular" class="nav_link">Popular</a>
                </li>
                <li class="nav_item">
                    <a href="/#recently" class="nav_link">Recently</a>
                </li>
                @if(Auth::check())
                <li class="nav_item">
                    <a href="{{ route('profile') }}" class="nav_link">{{ auth()->user()->name }}</a> - 
                    <a href="{{ route('logout') }}" class="nav_link">Logout</a>
                </li>
                @else
                <li class="nav_item">
                    <a href="/login" class="nav_link">Login</a>
                </li>
                @endif
            </ul>
        </div>
    </nav>
</header>