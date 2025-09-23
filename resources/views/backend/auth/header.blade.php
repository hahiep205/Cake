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
            </ul>
            <i class="ri-menu-line menu-icon"></i>
        </div>

        <div class="nav_right">
            <ul class="nav_item_right" style="list-style: none;">
                @if(Auth::check())
                    @if(auth()->user()->isAdmin())
                        <li class="nav_item">
                            <span style="color: #5ba4fc; font-size: 15px; font-weight: bold; padding: 0.5rem 0.7rem;">{{ auth()->user()->name }} <i class="ri-verified-badge-line"  style="font-size: 18px;"></i></span>
                            <a href="{{ route('admin') }}" class="nav_link" style="font-size: 20px;"><i class="ri-shield-flash-line"></i></a>
                            <a href="{{ route('profile') }}" class="nav_link" style="font-size: 20px;"><i class="ri-user-settings-line"></i></a>
                            <a href="{{ route('logout') }}" class="nav_link" style="font-size: 20px;"><i class="ri-logout-box-r-line"></i></a>
                        </li>
                    @else
                        <li class="nav_item">
                            <span style="color: #5ba4fc; font-size: 15px; font-weight: bold; padding: 0.5rem 0.7rem;">{{ auth()->user()->name }}</span>
                            <a href="{{ route('profile') }}" class="nav_link" style="font-size: 20px;"><i class="ri-user-settings-line"></i></a>
                            <a href="{{ route('cart') }}" class="nav_link" style="font-size: 20px;"><i class="ri-shopping-cart-2-line"></i></a>
                            <a href="{{ route('logout') }}" class="nav_link" style="font-size: 20px;"><i class="ri-logout-box-r-line"></i></a>
                        </li>
                    @endif
                @else
                    <li class="nav_item">
                        <a href="/login" class="nav_link">Login</a>
                        <a href="/register" class="nav_link">Register</a>
                    </li>
                @endif
            </ul>
        </div>

    </nav>
</header>