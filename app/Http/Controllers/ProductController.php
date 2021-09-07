<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class ProductController extends Controller
{
    //
    public function products() {
        // $data = ['allComics' => config('comics')];
        $data = ['allComics' => Comic::all()];
        return view('comics', $data);
    }

    public function show($id) {
        // $books = config('comics');
        // $data = ['comic' => $books[$id]];

        $books = Comic::where('id', $id)->first();
        $data = ['comic' => $books];
        
        return view('detail', $data);
    }
}
