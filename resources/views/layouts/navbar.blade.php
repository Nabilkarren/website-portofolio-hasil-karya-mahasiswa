<div class="navbar">
    <div class="navbar-header">
        <a href="{{ route('guest.home') }}" class="navbar-brand">
            <h1>UPortfolio</h1>
        </a>
        <ul class="navbar-feature">
            <li><a href="#">Explore</a></li>
            {{-- <li><a href="#">My Work</a></li> --}}
            <li><input type="search" placeholder="Search"></li>
        </ul>
    </div>

    <div class="user-sign-in">
        <a href="{{ route('guest.login') }}">Sign In</a>
    </div>

    {{-- <div class="navbar-right-side">
        <a href="#" class="notification-btn"><span class="material-symbols-outlined">
                notifications
            </span></a>
    </div> --}}
</div>