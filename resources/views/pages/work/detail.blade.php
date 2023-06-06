@extends('layouts.user-dashboard')

@section('title', 'My Work')

@section('dashboard-content')
<div class="content-wrap">
    <div class="karya-header">
        <div class="header-top">
            <h1>My Work</h1>
            <a href="#">Hapus Karya</a>
        </div>
        <div class="anchor-breadcrumb">
            <a href="{{ route('user.work') }}">My Work</a>
            <span class="material-symbols-outlined">chevron_right</span>
            <p>Pengembangan Sistem IOT Untuk Smart Home</p>
        </div>
    </div>

    <div class="detail-content">
        <div class="work-detail-wrap">
            <div class="left-content">
                <h1>Pengembangan Sistem IOT Untuk Smart Home</h1>
                <img src="images/gambar-karya-1.jpg" alt="">
                <div class="work-content">
                    <h2>About this karya</h2>
                    <p>Karya ini menjelaskan tentang bagaimana implementasi IoT dalam kehidupan sehari-hari, contohnya
                        dalam
                        kegiatan rumah. Perancangan ini dimulai dengan meneliti latar belakang beserta pain point dari
                        masyarakat sekitar. Kemudian, melakukan mapping pain point untuk mendapatkan benang merah dari
                        permasalahan yang dialami. Kemudia melakukan analisis potensi solusi yang akan diberikan dan
                        mendesain prototype.</p>
                </div>
            </div>

            <div class="right-content">
                <div class="feedback-section">
                    <h3>Feedback</h3>
                </div>
            </div>
        </div>

        <div class="work-detail-bottom">
            <div class="work-tagline">
                <a href="#">IoT</a>
                <a href="#">Arduino</a>
            </div>

            <div class="button-list">
                <a href="#" id="back-btn">Back</a>
                <a href="{{ route('user.work.edit') }}" id="edit-karya">Edit Karya</a>
            </div>
        </div>
    </div>
</div>
@endsection