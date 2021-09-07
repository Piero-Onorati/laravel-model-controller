@extends('layouts.app')
@section('title', 'DC Details Comic')
@section('content')

{{-- Jumbotron --}}
<div class="jumbotron"></div>

{{-- Spacer --}}
<div class="spacer"></div>

{{-- Start container with main COMIC INFO + ADV --}}
<div class="small-container">

    {{-- COMIC IMAGE --}}
    <div class="detail_img_box">
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    </div>

    {{-- COMIC INFO + ADV --}}
    <div class="detail_info_box">

        <!-- DETAIL INFO -->
        <div class="detail_info">

            <!-- Title -->
            <h3>{{$comic->title}}</h3>

            <!-- price-box -->
            <div class="price-box">

                <div class="price_book-available">
                    <div class="price_book"> U.S price: 
                       <span class="price">{{$comic->price}} $</span>
                    </div>
                    <span class="available">
                        available
                    </span>
                </div>

                <div class="check-availability">Check availability</div>
            </div>

            <!-- Description -->
            <p>{{$comic->description}}</p>

        </div>

         <!-- ADV  -->
        <div class="adv">
            <span class="adv-title">advertisement</span>
            <img src="{{asset('img/adv.jpg')}}" alt="adv">
        </div>
    </div>

</div>
{{-- end container with main COMIC INFO + ADV --}}

        
@endsection