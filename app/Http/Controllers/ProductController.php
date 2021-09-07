<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function products() {
        $data = ['allComics' => config('comics')];
        return view('comics', $data);
    }

    public function show($id) {
        $books = config('comics');
        $data = ['comic' => $books[$id]];
        return view('detail', $data);
    }
}
