@extends('layout.app')

@section('win-title')
    Add Comic
@endsection


@section('section-title')
    <h2>comic info</h2>
@endsection
@section('page-content')
    <section id="create">
        <div class="container my-5">
            <form action="{{route('comics.store')}}" method="POST" class="d-flex flex-column">
                @csrf
                <label for="title" class="text-capitalize">title:</label>
                <input type="text" name="title" id="title">
                <label for="price" class="text-capitalize">price:</label>
                <input type="text" name="price" id="price">
                <label for="series" class="text-capitalize">series:</label>
                <input type="text" name="series" id="series">
                <label for="type" class="text-capitalize">type:</label>
                <input type="text" name="type" id="type">
                <label for="sale_date">Sale Date:</label>
                <input type="date" name="sale_date" id="sale_date">
                <button class="text-uppercase m-3" type="submit" >Add</button>
            </form>
        </div>
    </section>
@endsection