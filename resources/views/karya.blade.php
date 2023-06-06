@extends('layouts.base')

@section('title', 'Karya')

@section('content')
<div class="karya-content">
    <div class="inner-wrapper">
        <div class="back-home">
            <span class="material-symbols-outlined">keyboard_backspace</span>
            <a href="{{ route('guest.home') }}">Back to Home</a>
        </div>

        <div class="inner-content">
            <div class="upper-section">
                <h1 class="judul-utama">Pengembangan Sistem IoT Untuk Smart Home</h1>
                <div class="upper-right-side">
                    <div class="uploader-profile">
                        <img src="images/profile-1.jpg" alt="">
                        <p>Muhammad Rafly Ramadhan Putra</p>
                    </div>
                    <div class="keterangan-uploader">
                        <p class="program-studi">Ilmu Komputer</p>
                        <span class="material-symbols-outlined fill-1">
                            circle
                        </span>
                        <p class="tanggal-upload">12 January 2023</p>
                    </div>
                </div>
            </div>

            <div class="below-section">
                <div class="below-section-left">
                    <img src="images/gambar-karya-1.jpg" alt="">
                    <p class="detail-karya">
                        Karya ini menjelaskan tentang pengembangan IoT untuk membantu pengawasan dalam rumah dan
                        mempermudah
                        aksesbilitas rumah untuk melakukan tugas kecil seperti menyalakan lampu, speaker, mendengarkan
                        lagu,
                        atau menggunakan perintah suara lainnya.
                    </p>
                    <p class="detail-karya">
                        Karya ini menjelaskan tentang pengembangan IoT untuk membantu pengawasan dalam rumah dan
                        mempermudah
                        aksesbilitas rumah untuk melakukan tugas kecil seperti menyalakan lampu, speaker, mendengarkan
                        lagu,
                        atau menggunakan perintah suara lainnya.
                    </p>
                </div>

                <div class="below-section-right">
                    <div class="karya-sidebar-content">
                        <h3>Feedback</h3>
                        <div class="karya-comment-post">
                            <form action="#" method="POST">
                                <textarea name="" id="" placeholder="Share your thoughts"></textarea>

                                <div class="post-button">
                                    <button type="submit">Post</button>
                                </div>
                            </form>
                        </div>

                        <div class="karya-comment-list">
                            <div class="karya-comment">
                                <div class="comment-author">
                                    <img src="images/gradient-3.jpg" alt="">
                                    <p>Ahmad Ramsey</p>
                                </div>

                                <div class="comment-content">
                                    <p>Keren implementasinya!</p>
                                </div>
                            </div>

                            <div class="karya-comment">
                                <div class="comment-author">
                                    <img src="images/gradient-3.jpg" alt="">
                                    <p>Ahmad hawari Lukus</p>
                                </div>

                                <div class="comment-content">
                                    <p>Keren banget sih!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection