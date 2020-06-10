<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('public.app.index');
    }

    public function indexWeb()
    {
        return view('public.app.app-list', ['platform' => 'Web']);
    }

    public function indexMobile()
    {
        return view('public.app.app-list', ['platform' => 'Mobile']);
    }

    public function indexDesktop()
    {
        return view('public.app.app-list', ['platform' => 'Desktop']);
    }

    public function showAppDetail()
    {
        return view('public.app.app-detail', ['platform' => 'Desktop']);
    }

    public function showUser()
    {
        return view('public.app.user');
    }

}
