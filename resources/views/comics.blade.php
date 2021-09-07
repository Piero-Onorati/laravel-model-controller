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
        @foreach ($allComics as $comic)

            <div class="card">

                <!-- IMAGE -->
                <div class="img-box">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </div>

                <!-- TITLE/LINK -->
                <a class="book-name" href="{{route('detailpage',['id'=>$comic->id])}}">{{$comic['title']}}</a>
                
            </div>
            
        @endforeach

        <!-- Button -->
        <span class="button">Load More</span>
    </div>

    {{-- Highlighted Content --}}
    <div class="highlighted-content">
        <ul>
            <li>
                <div class="img-box">
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}">
                </div>
                <span>digital comics</span>
            </li>
            <li>
                <div class="img-box">
                    <img src="{{asset('img/buy-comics-merchandise.png')}}">
                </div>
                <span>DC merchandise</span>
            </li>
            <li>
                <div class="img-box">
                    <img src="{{asset('img/buy-comics-subscriptions.png')}}">
                </div>
                <span>subscription</span>
            </li>
            <li>
                <div class="img-box">
                    <img src="{{asset('img/buy-comics-shop-locator.png')}}">
                </div>
                <span>comic shop locator</span>
            </li>
            <li>
                <div class="img-box">
                    <img src="{{asset('img/buy-dc-power-visa.svg')}}">
                </div>
                <span>dc power visa</span>
            </li>
        </ul>
    </div>

</section>


    
@endsection