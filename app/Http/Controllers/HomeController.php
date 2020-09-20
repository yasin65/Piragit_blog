<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }
    public function index()
    {
        return view('website.home');
    }
    public function about()
    {
        return view('website.about');
    }
    public function post()
    {
        return view('website.post');
    }
    public function contact()
    {
        return view('website.contact');
    }
    public function category()
    {
        return view('website.category');
    }

    public function admin()
    {
        return view('admin.dashboard.index');
    }

}
