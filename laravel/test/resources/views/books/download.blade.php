@extends('layouts.layout')

@section('title')All Books @endsection

@section('content')

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
            </tr>    
            @endforeach
          </tbody>
    </table>
</div>

@endsection