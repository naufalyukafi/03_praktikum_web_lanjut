<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }
    public function productBeranda() {
        return view('product');
    }
    public function news($title) {
        return view('news', ['title' => $title]);
    }
    public function programBeranda() {
        return view('program');
    }
    public function about() {
        return view('about-us');
    }
}
