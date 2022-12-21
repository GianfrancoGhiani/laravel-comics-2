@extends('layout.app')

@section('title', 'DC - Home')

@section('section-title')
<h2 class="caps">All Comics</h2>
@endsection

@section('page-content')
<section class="comic-list" id="index">
    <div class="container d-flex justify-content-center">
        <div class="row row-cols-6">
            @foreach ($comics as $comic)
                <div class="col">
                    <a href="{{route('comics.show', ['comic'=>$comic->id])}}">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                            </div>
                            <div class="card-txt">
                                <div class="text-uppercase">{{$comic->title}}</div>
                                <div class="sub">{{$comic->type}} 
                                    <div>
                                        <button class="edit-btn"><a href="{{route('comics.edit', ['comic'=>$comic->id])}}"><i class="fa-solid fa-file-pen"></i></a></button>
                                        <form action="{{route('comics.destroy', ['comic'=>$comic->id])}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="edit-btn bg-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
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
    <form action="{{route('comics.create')}}">
        <button class="text-uppercase" type="submit" >Add your favourite comic</button>
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