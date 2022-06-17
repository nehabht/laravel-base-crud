@extends('layouts.app')

@section('content')



<div class="container w-50 mt-4 mb-4">


    <!-- Puntare il form alla rotta POST store -->
    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div class="form-group m">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Type the comic name here" aria-describedby="titleHelper">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="Type the description here" aria-describedby="thumbHelper">
        </div>
        <div class="form-group">
            <label for="thumb">Thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Type the thumb here" aria-describedby="thumbHelper">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="Tyoe the price" aria-describedby="thumbHelper">
        </div>
        <div class="form-group">
            <label for="series">Series</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="Type series" aria-describedby="thumbHelper">
        </div>
        <div class="form-group">
            <label for="sale_date">Sale Date</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Type sale date" aria-describedby="thumbHelper">
        </div>
        <div class="form-group">
            <label for="type">comic type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="Type of the comic" aria-describedby="thumbHelper">
        </div>


        <button type="submit" class="btn btn-primary mt-4">Add Comic</button>
        


    </form>    


</div>

<p>
    <a  class="btn btn-sm btn-primary ms-4 text-end" href="{{ route('comics.index')}}">Back to comics</a>
</p>



@endsection
