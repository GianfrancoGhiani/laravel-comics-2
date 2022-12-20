@extends('layout.app')
{{-- window title --}}
@section('win-title')
{{$comic->title}}
@endsection

@section('section-title')
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
@endsection
{{-- main content --}}
@section('page-content')
    <section id="show">
        <div class="container">
            <h2>{{$comic->title}}</h2>
            <div class="serie">{{$comic->series}}</div>
            <div class="text-capitalize">{{$comic->type}}, sale date: {{$comic->sale_date}}</div>
            <p>Overview: <br>{{$comic->description}}</p>
            <h3>{{$comic->price}}</h3>
            <button class="btn text-uppercase">Buy Now!!!</button>
        </div>
    </section>
@endsection