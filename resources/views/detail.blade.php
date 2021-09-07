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
        <img src="{{$comic['thumb']}}" alt=" {{$comic['title']}}">
    </div>

    {{-- COMIC INFO + ADV --}}
    <div class="detail_info_box">

        <!-- DETAIL INFO -->
        <div class="detail_info">

            <!-- Title -->
            <h3>{{$comic['title']}}</h3>

            <!-- price-box -->
            <div class="price-box">

                <div class="price_book-available">
                    <div class="price_book"> U.S price: 
                       <span class="price">{{$comic['price']}}</span>
                    </div>
                    <span class="available">
                        available
                    </span>
                </div>

                <div class="check-availability">Check availability</div>
            </div>

            <!-- Description -->
            <p>{{$comic['description']}}</p>

        </div>

         <!-- ADV  -->
        <div class="adv">
            <span class="adv-title">advertisement</span>
            <img src="{{asset('img/adv.jpg')}}" alt="adv">
        </div>
    </div>

</div>
{{-- end container with main COMIC INFO + ADV --}}

<div class="details_other_info">

    {{-- <div class="details_other_info_box">
        <div class="talent">
            <h4>Talent</h4>
            <ul>
                <li>
                    <span class="li-title">
                        Art by
                    </span>
                    <div>
                        @foreach ($comic['artists'] as $artist)
                            <span>{{$artist}}</span>
                        @endforeach 
                    </div>
                </li>
                <li>
                    <span class="li-title">
                        Written by
                    </span>
                    <div>
                        @foreach ($comic['writers'] as $writer)
                            <span>{{$writer}}</span>
                        @endforeach 
                    </div>
                </li>
            </ul>
        </div>
        <div class="spec">
            <h4>Spec</h4>
            <ul>
                <li>
                    <span class="li-title">Series: </span>
                    <div>{{$comic['series']}}</div>
                </li>
                <li>
                    <span class="li-title">U.S. Price: </span>
                    <div>{{$comic['price']}}</div>
                </li>
                <li>
                    <span class="li-title">On Sale Date: </span>
                    <div>{{$comic['sale_date']}}</div>
                </li>
            </ul>
        </div>

    </div> --}}

</div>

        
@endsection