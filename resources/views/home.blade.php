@extends('layout.app')

@section('title', 'DC - Home')

@section('section-title') 
<h2 class="caps">current series</h2>
@endsection

@section('page-content')
<section class="comic-list" id="home">
    <div class="container d-flex justify-content-center">
        <div class="row row-cols-4">
            @foreach ($comics as $comic)
                <div class="col">
                    <a href="{{route('comics.show', ['comic'=>$comic->id])}}">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                            </div>
                            <div class="card-txt">
                                <div class="text-uppercase">{{$comic->title}}</div>
                                <div class="sub">{{$comic->type}}</div>
                            </div>
                            <div class="details">
                            <div class="det-wrap">
                                <div>{{$comic->price}}</div>
                                <div>Sale date: {{$comic->sale_date}}</div>
                            </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        
    </div>
    <form action="{{route('comics.index')}}">
        <button class="text-uppercase" type="submit" >load more</button>
    </form>
    
</section>
<section class="blue-pt">
    <div class="container text-uppercase">
        @foreach ($buy as $merch)
            <div class="merch">
            <img src="{{Vite::asset('resources/img/'.$merch['imgPath'])}}" alt="{{$merch['title']}}">
            <div class="caps">{{$merch['title']}}</div>
        </div>
        @endforeach
        
    </div>
</section>


@endsection