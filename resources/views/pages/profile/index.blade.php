@extends('layouts.user-dashboard')

@section('title', 'Dashboard')

@section('dashboard-content')
<div class="content-wrap">
    <div class="header">
        <h1>Edit Profile</h1>
    </div>

    <div class="detail-content">
        <form action="" method="POST">
            <div class="input-column-img" id="profile-image">
                <img src="images/profile-1.jpg" alt="">
                <input type="file">
                <input type="submit" value="Delete" id="delete-img">
            </div>

            <div class="input-row">
                <div class="input-column" id="profile-username">
                    <label for="username" class="input-label">Username</label>
                    <input type="text" id="username" placeholder="Masukkan username yang kamu inginkan!">
                </div>

                <div class="input-column" id="prodfile-prodi">
                    <label for="prodi" class="input-label">Program Studi</label>
                    {{-- <input type="text" placeholder="Jelaskan apa saja tentang karya kamu"> --}}
                    <input type="text" id="prodi" placeholder="Masukkan program studi kamu saat ini!">
                </div>
            </div>

            <div class="input-row">
                <div class="input-column" id="profile-full-name">
                    <label for="nama_lengkap" class="input-label">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" placeholder="Masukkan kategori karya kamu!">
                </div>

                <div class="input-column" id="profile-email">
                    <label for="email" class="input-label">Email Address</label>
                    <input type="text" id="email" placeholder="Masukkan kategori karya kamu!">
                </div>
            </div>

            <div class="input-column" id="profile-about">
                <label for="about_me" class="input-label">About Me</label>
                <textarea name="" id="about_me" placeholder="Ceritakan sedikit tentang diri kamu!"></textarea>
            </div>

            <div class="input-row">
                <div class="input-column" id="profile-oldpass">
                    <div class="input-header">
                        <label for="old_pass" class="input-label">Old Password</label>
                        <p>*Optional</p>
                    </div>
                    <input type="password" id="old_pass" placeholder="Masukkan kata sandi kamu sebelumnya!">
                </div>

                <div class="input-column" id="profile-newpass">
                    <div class="input-header">
                        <label for="new_pass" class="input-label">New Password</label>
                        <p>*Optional</p>
                    </div>
                    <input type="password" id="new_pass" placeholder="Masukkan kamu yang baru!">
                </div>
            </div>

            <div class="form-button">
                <button type="" id="cancel-btn">Cancel</button>
                <button type="submit" id="submit-btn">Save Changes</button>
            </div>
        </form>
    </div>
</div>
@endsection