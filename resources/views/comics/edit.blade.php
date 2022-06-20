@extends('layouts.app')

@section('content')

<h1 class="text-center"> Edit {{ $comic->title }}</h1>

<div class="container w-50 mt-4 mb-4">

    <!-- validare i dati -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <!-- Puntare il form alla rotta POST store -->
    <form action="{{ route('comics.update', $comic->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Type the comic name here" aria-describedby="titleHelper" value="{{ $comic->title }}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Type the description here" aria-describedby="thumbHelper" value="{{ $comic->description }}">
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="Type the thumb here" aria-describedby="thumbHelper" value="{{ $comic->thumb }}">
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Tyoe the price" aria-describedby="thumbHelper" value="{{ $comic->price  }}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="series">Series</label>
            <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="Type series" aria-describedby="thumbHelper" value="{{ $comic->series }}">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="sale_date">Sale Date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control @error('sale_date') is-invalid @enderror" placeholder="Type sale date" aria-describedby="thumbHelper" value="{{ $comic->sale_date }}">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type">comic type</label>
            <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="Type of the comic" aria-describedby="thumbHelper" value="{{ $comic->type }}">
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary mt-4">Edit Comic</button>
        


    </form>    


</div>

<p>
    <a  class="btn btn-sm btn-primary ms-4 text-end" href="{{ route('welcome')}}">Back to homepage</a>
</p>



@endsection
