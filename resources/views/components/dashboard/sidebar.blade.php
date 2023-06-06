{{-- Dashboard Desktop Sidebar --}}
<aside class="dashboard-sidebar">
    <div class="text-uportfolio-bg">
        <div class="img-href">
            <img src="{{ asset('/assets/img/UPortfolio.png') }}" alt="">
        </div>

        <div class="user-profile-brief">
            <img src="images/profile-1.jpg" alt="">
            <div class="user-profile-detail">
                <p class="user-nama">
                    Muhammad Rafly
                </p>
                <p class="program-studi">
                    Ilmu Komputer
                </p>
            </div>
        </div>

        <ul class="feature-list feature-active">
            <li>
                <span class="material-symbols-outlined">home</span>
                <a href="{{ route('user.dashboard') }}">Dashboard</a>
                <span class="material-symbols-outlined" id="feature-dot">fiber_manual_record</span>
            </li>
        </ul>

        <ul class="feature-list feature-deactive">
            <li>
                <span class="material-symbols-outlined">dashboard</span>
                <a href="{{ route('user.work') }}">My Work</a>
            </li>
        </ul>

        <ul class="feature-list feature-deactive">
            <li>
                <span class="material-symbols-outlined">person</span>
                <a href="{{ route('user.profile') }}">Edit Profile</a>
            </li>
        </ul>

        <ul class="feature-list feature-deactive">
            <li>
                <span class="material-symbols-outlined">logout</span>
                <a href="#">Logout</a>
            </li>
        </ul>
    </div>
</aside>