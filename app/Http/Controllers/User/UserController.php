<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function guest()
    {
        return view('home');
    }

    public function lihatKarya()
    {
        return view('karya');
    }

    public function editProfile()
    {
        return view('profile');
    }

    public function dashboard()
    {
        return view('pages.dashboard.index');
    }

    public function myWork()
    {
        return view('pages.work.index');
    }

    public function myWorkDetail()
    {
        return view('pages.work.detail');
    }

    public function addWork()
    {
        return view('pages.work.create');
    }

    public function profile()
    {
        return view('pages.profile.index');
    }

    public function editKarya()
    {
        return view('pages.work.edit');
    }
}
