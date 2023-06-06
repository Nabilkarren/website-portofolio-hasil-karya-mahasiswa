@extends('layouts.user-dashboard')

@section('title', 'My Work')

@section('dashboard-content')
<div class="content-wrap">
    <div class="header">
        <h1>My Work</h1>
        <a href="{{ route('user.work.create') }}">+ Add Karya</a>
    </div>

    <div class="my-work-content">
        <div class="karya-card">
            <a href="{{ route('user.work.detail') }}">
                <div class="small-thumbnail">
                    <img src="images/gambar-karya-1.jpg" alt="">
                </div>
                <div class="card-content">
                    {{-- <div class="kategori-prodi">
                        <p>Ilmu Komputer</p>
                    </div> --}}
                    <div class="karya-title">
                        <p>Pengembangan Sistem IOT Untuk Smart Home</p>
                    </div>
                    <div class="detail-karya">
                        <div class="uploader">
                            <img src="images/profile-1.jpg" alt="">
                            <p>Muhammad Rafly Ramadhan Putra</p>
                        </div>
                        <p>19 June 2021</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="karya-card">
            <a href="#">
                <div class="small-thumbnail">
                    <img src="images/gambar-karya-1.jpg" alt="">
                </div>
                <div class="card-content">
                    {{-- <div class="kategori-prodi">
                        <p>Ilmu Komputer</p>
                    </div> --}}
                    <div class="karya-title">
                        <p>Pengembangan Sistem IOT Untuk Smart Home</p>
                    </div>
                    <div class="detail-karya">
                        <div class="uploader">
                            <img src="images/profile-1.jpg" alt="">
                            <p>Muhammad Rafly Ramadhan Putra</p>
                        </div>
                        <p>19 June 2021</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="karya-card">
            <a href="#">
                <div class="small-thumbnail">
                    <img src="images/gambar-karya-1.jpg" alt="">
                </div>
                <div class="card-content">
                    {{-- <div class="kategori-prodi">
                        <p>Ilmu Komputer</p>
                    </div> --}}
                    <div class="karya-title">
                        <p>Pengembangan Sistem IOT Untuk Smart Home</p>
                    </div>
                    <div class="detail-karya">
                        <div class="uploader">
                            <img src="images/profile-1.jpg" alt="">
                            <p>Muhammad Rafly Ramadhan Putra</p>
                        </div>
                        <p>19 June 2021</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="karya-card">
            <a href="#">
                <div class="small-thumbnail">
                    <img src="images/gambar-karya-1.jpg" alt="">
                </div>
                <div class="card-content">
                    {{-- <div class="kategori-prodi">
                        <p>Ilmu Komputer</p>
                    </div> --}}
                    <div class="karya-title">
                        <p>Pengembangan Sistem IOT Untuk Smart Home</p>
                    </div>
                    <div class="detail-karya">
                        <div class="uploader">
                            <img src="images/profile-1.jpg" alt="">
                            <p>Muhammad Rafly Ramadhan Putra</p>
                        </div>
                        <p>19 June 2021</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="karya-card">
            <a href="#">
                <div class="small-thumbnail">
                    <img src="images/gambar-karya-1.jpg" alt="">
                </div>
                <div class="card-content">
                    {{-- <div class="kategori-prodi">
                        <p>Ilmu Komputer</p>
                    </div> --}}
                    <div class="karya-title">
                        <p>Pengembangan Sistem IOT Untuk Smart Home</p>
                    </div>
                    <div class="detail-karya">
                        <div class="uploader">
                            <img src="images/profile-1.jpg" alt="">
                            <p>Muhammad Rafly Ramadhan Putra</p>
                        </div>
                        <p>19 June 2021</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="karya-card">
            <a href="#">
                <div class="small-thumbnail">
                    <img src="images/gambar-karya-1.jpg" alt="">
                </div>
                <div class="card-content">
                    {{-- <div class="kategori-prodi">
                        <p>Ilmu Komputer</p>
                    </div> --}}
                    <div class="karya-title">
                        <p>Pengembangan Sistem IOT Untuk Smart Home</p>
                    </div>
                    <div class="detail-karya">
                        <div class="uploader">
                            <img src="images/profile-1.jpg" alt="">
                            <p>Muhammad Rafly Ramadhan Putra</p>
                        </div>
                        <p>19 June 2021</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection