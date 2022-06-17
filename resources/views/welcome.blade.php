@extends('layouts.app')

@section('content')
<div class="bg-black text-white p-5">
    <div class="container">
        <h1>Homepage Comics</h1>
        <p class="mt-3">
            <a class="btn btn-primary" href="{{route('comics.index')}}">All comics</a>
        </p>
    </div>
</div>
<section>
    <div class="container mt-4">
        <h4 class="py-4">This month's favorites</h4>
        <div class="row row-cols-1 row-cols-sm-4 g-4 text-center ">
            @forelse($comics as $comic)
            <div class="col">
                <div class="card h-100">
                    <a href="{{route('comics.show',$comic->id)}}">
                        <img class="img-fluid" src="{{$comic->thumb}}" alt=""> </a>
                    <div class="card-body">
                        <h3>{{$comic->series}}</h3>
                        <p class="text-danger pt-2 text-start"> <strong>Price: €{{$comic->price}} </strong></p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col">
                <p>Nothing found</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection