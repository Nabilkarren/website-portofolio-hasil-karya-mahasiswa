@extends('layouts.base')

@section('title', 'Home')

@section('content')
<div class="content">
    <div class="main-header">
        <p>Explore Others Work 🤘</p>
    </div>

    <div class="karya-wrapper">
        <div class="karya-card">
            <a href="{{ route('lihat.karya') }}">
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
                    <img src="images/Pakthani.png" alt="">
                </div>
                <div class="card-content">
                    {{-- <div class="kategori-prodi">
                        <p>Ilmu Komputer</p>
                    </div> --}}
                    <div class="karya-title">
                        <p>Pengembangan Sistem IOT Untuk Smart Home Menggunakan Framework Laravel 9</p>
                    </div>
                    <div class="detail-karya">
                        <div class="uploader">
                            <img src="images/profile-2.jpg" alt="">
                            <p>Nabil Karren Y</p>
                        </div>
                        <p>19 June 2021</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="karya-card">
            <a href="#">
                <div class="small-thumbnail">
                    <img src="images/IoT-kit.jpg" alt="">
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
                            <img src="images/profile-3.jpg" alt="">
                            <p>Nabil Karren Y</p>
                        </div>
                        <p>19 June 2021</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="karya-card">
            <a href="#">
                <div class="small-thumbnail">
                    <img src="images/react-website.jpg" alt="">
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
                            <img src="images/gradient-3.jpg" alt="">
                            <p>Nabil Karren Y</p>
                        </div>
                        <p>19 June 2021</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="karya-card">
            <a href="#">
                <div class="small-thumbnail">
                    <img src="images/uiux-design.jpg" alt="">
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
                            <img src="images/profile-4.jpg" alt="">
                            <p>Nabil Karren Y</p>
                        </div>
                        <p>19 June 2021</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="karya-card">
            <a href="#">
                <div class="small-thumbnail">
                    <img src="images/website-design.jpg" alt="">
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
                            <img src="images/gradient-5.jpg" alt="">
                            <p>Nabil Karren Y</p>
                        </div>
                        <p>19 June 2021</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="karya-card">
            <a href="#">
                <div class="small-thumbnail">
                    <img src="images/data-visualization.jpg" alt="">
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
                            <img src="images/gradient-6.jpg" alt="">
                            <p>Nabil Karren Y</p>
                        </div>
                        <p>19 June 2021</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="karya-card">
            <a href="#">
                <div class="small-thumbnail">
                    <img src="images/art-design.jpg" alt="">
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
                            <img src="images/gradient-7.jpg" alt="">
                            <p>Nabil Karren Y</p>
                        </div>
                        <p>19 June 2021</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="karya-card">
            <a href="#">
                <div class="small-thumbnail">
                    <img src="images/robotic-design.jpg" alt="">
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
                            <img src="images/gradient-8.jpg" alt="">
                            <p>Nabil Karren Y</p>
                        </div>
                        <p>19 June 2021</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    @endsection