<header>
    <div class="navigation-menu container">
        
        {{-- LOGO --}}
        <div class="logo">
            <a href="{{route('homepage')}}">
                <img src="{{asset('img/dc-logo.png')}}" alt="logo">
            </a>
        </div>

        {{-- NABBAR --}}
        <nav>
            <ul>
                <li><a href="{{route('characterspage')}}">characters</a></li>
                <li><a href="{{route('comicspage')}}">comics</a></li>
                <li><a href="{{route('moviepage')}}">movies</a></li>
                <li><a href="{{route('tvpage')}}">tv</a></li>
                <li><a href="{{route('examplepage')}}">games</a></li>
                <li><a href="{{route('examplepage')}}">collectibles</a></li>
                <li><a href="{{route('examplepage')}}">videos</a></li>
                <li><a href="{{route('examplepage')}}">fan</a></li>
                <li><a href="{{route('examplepage')}}">news</a></li>
                <li><a href="{{route('examplepage')}}">shop</a></li>
            </ul>
        </nav>

        {{-- INPUT-BOX --}}
        <div class="input-box">
            <input type="text" placeholder="Search">
        </div>
        
    </div>
</header>