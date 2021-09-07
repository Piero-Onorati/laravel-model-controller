@extends('layouts.app')
@section('title', 'DC Homepage')

@section('content')

<section class="comics_page">

    {{-- Jumbotron --}}
    <div class="jumbotron"></div>

    {{-- Container with all the comics --}}
    <div class="container">

        <!-- Label -->
        <span class="label">current series</span>

        <!-- Box with all the comics -->
        @foreach ($allComics as $key => $comic)

            <div class="card">

                <!-- IMAGE -->
                <div class="img-box">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </div>

                <!-- TITLE/LINK -->
                <a class="book-name" href="{{route('detailpage',['id'=>$key])}}">{{$comic['title']}}</a>
                
            </div>
            
        @endforeach

        <!-- Button -->
        <span class="button">Load More</span>
    </div>


</section>


    
@endsection