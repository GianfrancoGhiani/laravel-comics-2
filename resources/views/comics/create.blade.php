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
                <input type="text" name="title" id="title" required>
                <label for="price" class="text-capitalize">price:</label>
                <input type="text" name="price" id="price" required>
                <label for="series" class="text-capitalize">series:</label>
                <input type="text" name="series" id="series" required>
                <label for="type" class="text-capitalize">type:</label>
                <select name="type" id="type" required>
                    <option value="comic book">comic book</option>
                    <option value="graphic novel">graphic novel</option>
                </select>
                <label for="sale_date">Sale Date:</label>
                <input type="date" name="sale_date" id="sale_date" required>
                <div class="d-flex align-self-center">
                    <button class="text-uppercase m-3" type="submit" >Add</button>
                    <button class="text-uppercase m-3 bg-danger" type="reset" >Reset</button>
                </div>

            </form>
        </div>
    </section>
@endsection