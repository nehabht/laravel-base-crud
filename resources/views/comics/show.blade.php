@extends('layouts.app')

@section('content')


<section>
    <div class="container mt-4">
        <h2>{{ $comic->title }}</h2>
        <img with="100" class="mt-4 " src="{{ $comic->thumb }}" alt="">
        

        <div class="back mt-4">
            <a class="btn btn-primary " href="{{ route('comics.index')}}"> All comics</a>
        </div>
    </div>
</section>






@endsection