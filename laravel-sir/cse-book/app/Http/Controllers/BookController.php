<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function listAllBooks()
    {
        $books = Book::where('stock','<=',10)
            ->where('title','like','%qu%')
            ->where('price','>',50)
            ->orderBy('title','asc')
            ->get();

        return view('books.list_all')
            ->with('books',$books);

    }
}
