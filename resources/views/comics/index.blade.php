@extends('layouts.app')

@section('content')



<div class="container">
  <div class="heading d-flex justify-content-between align-items-center">
    <h1 class="p-5">Comics</h1>
    <div>
      <a class="btn btn-primary d-block" href="{{route('comics.create')}}">Add Comic</a>
    </div>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>thumb</th>
        <th>title</th>
        <th>description</th>
        <th>price</th>
        <th>type</th>
      </tr>
    </thead>
    <tbody>

      @foreach($comics as $comic)
      <tr>
        <td scope="row">{{ $comic->id }}</td>

        <td><img width="50" src="{{$comic->thumb}}" alt=""></td>
        <td>{{ $comic->title }}</td>
        <td>{{ $comic->description }}</td>
        <td> $ {{ $comic->price }}</td>
        <td>{{ $comic->type }}</td>
        <td><img width="50" src="{{$comic->cover_image}}" alt=""></td>
        <td><a href="{{route('comics.show', $comic->id)}}">View</a>- Edit - Delete</td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>


@endsection