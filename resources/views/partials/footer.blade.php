<footer>
    <section class="bg">
        <div class="container">
            <div class="lists">
                @foreach ($links as $linklist)
                    <ul>
                        @foreach ($linklist as $key => $value)
                            <li>
                                <a href="#" class="{{!$key ? 'list-title': ''}}">{{$value}}</a>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
                
            </div>
            <div class="big-logo">
                <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="dc logo">
            </div>
        </div>
    </section>
    <section class="bottom">
        <div class="container text-uppercase">
            <button class="btn caps  text-uppercase">sign-up now!</button>
            <div class="social">
                <span class="caps">follow us</span>
                <div>
                    @foreach ($socials as $social)
                        <img src="{{Vite::asset('resources/img/'. $social['path'])}}" alt="{{$social['name']}}">
                    @endforeach
                    
                </div>
    
                
    
            </div>
        </div>
    </section>
</footer>