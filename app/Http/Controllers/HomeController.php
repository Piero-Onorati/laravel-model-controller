<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function characters() {
        return view('characters');
    }

    public function movie() {
        return view('movie');
    }

    public function tv() {
        return view('tv');
    }

    public function example() {
        return view('example');
    }
}

