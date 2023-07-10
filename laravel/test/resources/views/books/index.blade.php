@extends('layouts.layout')

@section('title')Index @endsection

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="container mt-2 mb-2">
    <div class="row ">
      <div class="col text-start">
        <h1>Books</h1>
      </div>
      <div class="col justify-content-md-end d-flex">
        <div>
          <a href="{{ route('books.download') }}" class="m-2 btn btn-success">Download PDF</a>
        </div>
        <div>
          <a href="{{route('books.create')}}" class="m-2 btn btn-primary">Add Book</a>
        </div>
      </div>
    </div>
</div>

<div class="container mt-2 mb-2">
    <table class="table table-stripe table-hover">
        <thead class="bg-dark text-white text-center">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">ISBN</th>
                <th scope="col">Price</th>
                <th scope="col">Available</th>
                <th scope="col">Action</th>
              </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <th scope="row">{{$book->id}}</th>
                <td>{{$book->title}}</td>
                <td class="text-center">{{$book->author}}</td>
                <td class="text-center">{{$book->isbn}}</td>
                <td class="text-center">{{$book->price}}</td>
                <td class="text-center">{{$book->available}}</td>
                <td class="d-flex">
                  <div class="m-1"><a href="{{ route('books.edit', ['book' => $book]) }}" class="btn btn-secondary">Edit</a></div>
                  <div class="m-1"><a href="{{ route('books.show', ['book' => $book]) }}" class="btn btn-info">View</a></div>
                  <div class="m-1">
                    <form action="{{ route('books.destroy', ['book' => $book]) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger">Delete</button>
                    </form>
                  </div>
                </td>
            </tr>    
            @endforeach
          </tbody>
    </table>
    {{ $books->links() }}
</div>

@endsection