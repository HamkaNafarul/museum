<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('landing/index');
    }

    public function surat()
    {
        return view('landing/surat');
    }

    public function pameran()
    {
        return view('landing/pameran');
    }

    public function koleksi()
    {
        return view('landing/koleksi');
    }

    //dashboard
    public function dashboard()
    {
        return view('dashboard/home');
    }

    public function dashboardKoleksi()
    {
        return view('dashboard/koleksi');
    }

    public function dashboardSurat()
    {
        return view('dashboard/surat');
    }

    public function dashboardKatalog()
    {
        return view('dashboard/katalog');
    }

    public function dashboardAdmin()
    {
        return view('dashboard/admin');
    }

    public function login()
    {
        return view('dashboard/login');
    }
}
