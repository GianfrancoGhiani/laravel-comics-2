@extends('layout.app')

@section('win-title')
    Add Comic
@endsection


@section('section-title')
    <h2>editing: {{$comic->title}}</h2>
@endsection
@section('page-content')
    <section id="create">
        <div class="container my-5">
            <form action="{{ route('comics.update', ['comic'=> $comic->id])}}" method="POST" class="d-flex flex-column">
                @csrf
                @method('PUT')
                <label for="title" class="text-capitalize">title:</label>
                <input type="text" name="title" id="title" value="{{old('title', $comic->title)}}">
                <label for="price" class="text-capitalize">price:</label>
                <input type="text" name="price" id="price" value="{{old('price', $comic->price)}}">
                <label for="series" class="text-capitalize">series:</label>
                <input type="text" name="series" id="series" value="{{old('series', $comic->series)}}">
                <label for="type" class="text-capitalize">type:</label>
                <select name="type" id="type">
                    <option value="comic book" 
                    @if ($comic->type == 'comic book')
                        selected
                    @endif
                    >comic book</option>
                    <option value="graphic novel"
                    @if ($comic->type == 'graphic novel')
                        selected
                    @endif
                    >graphic novel</option>
                </select>
                <label for="sale_date">Sale Date:</label>
                <input type="date" name="sale_date" id="sale_date" value="{{old('sale_date', $comic->sale_date)}}">
                <div class="d-flex align-self-center">
                    <button class="text-uppercase m-3" type="submit" >Update</button>
                    <button class="text-uppercase m-3 bg-danger" type="reset" >Reset</button>
                </div>
            </form>
        </div>
    </section>
@endsection