@extends('layouts.user-dashboard')

@section('title', 'Add Work')

@section('dashboard-content')
<div class="content-wrap">
    <div class="karya-header">
        <div class="header-top">
            <h1>Add Your Karya</h1>
        </div>
        <div class="anchor-breadcrumb">
            <a href="{{ route('user.dashboard') }}">My Work</a>
            <span class="material-symbols-outlined">chevron_right</span>
            <p>Add Your Karya</p>
        </div>
    </div>

    <div class="detail-content">
        <form action="" method="POST">
            <div class="input-column" id="judul-karya">
                <label for="" class="input-label">Judul Karya</label>
                <input type="text" placeholder="Masukkan judul karya kamu!">
            </div>

            <div class="input-column" id="detail-karya">
                <label for="" class="input-label">Detail Karya</label>
                {{-- <input type="text" placeholder="Jelaskan apa saja tentang karya kamu"> --}}
                <textarea name="" id="" placeholder="Jelaskan apa saja tentang karya kamu!"></textarea>
            </div>

            <div class="input-column" id="thumbnail-karya">
                <label for="" class="input-label">Thumbnail Karya</label>
                <input type="file" placeholder="Thumbnail 1">
                <input type="file" placeholder="Thumbnail 2">
                <input type="file" placeholder="Thumbnail 3">
            </div>

            <div class="input-column" id="kategori-karya">
                <label for="" class="input-label">Kategori Karya</label>
                <input type="text" placeholder="Masukkan kategori karya kamu!">
            </div>

            <div class="form-button">
                <button type="" id="cancel-btn">Cancel</button>
                <button type="submit" id="submit-btn">Add Karya</button>
            </div>
        </form>
    </div>
</div>
@endsection