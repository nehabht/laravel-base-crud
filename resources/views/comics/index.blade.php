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
        <th>ID</th>
        <th>Thumb</th>
        <th>Title</th>
        <th>Description</th>
        <th>$</th>
        <th>Type</th>
      </tr>
    </thead>
    <tbody>

      @foreach($comics as $comic)
      <tr>
        <td scope="row">{{ $comic->id }}</td>

        <td><img width="50" src="{{$comic->thumb}}" alt=""></td>
        <td>{{ $comic->title }}</td>
        <td>{{ $comic->description }}</td>
        <td>{{ $comic->price }}</td>
        <td>{{ $comic->type }}</td>
        <td><img width="50" src="{{$comic->cover_image}}" alt=""></td>
        <td>
          <a class="btn btn-primary m-1" href="{{ route('comics.show', $comic->id) }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-angle-expand d-block" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
            </svg>
            <a>
          <a class="btn btn-secondary m-1" href="{{ route('comics.edit', $comic->id) }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square d-block" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
          </a>
          
          <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger m-1" type="submit">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash d-block" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
              </svg>
            </button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>


@endsection