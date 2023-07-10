<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $books = Book::all();
        // $books = Book::get();
        $books = Book::Paginate(10);
        // return "all books";
        return view("books.index", ["books" => $books]);
        // return view('books.download', ['books' => $books]);
        // return "hello";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("books.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $data = $request->validate([
            'title'     => 'required',
            'author'    => 'required',
            'isbn'      => 'required|numeric',
            'price'     => 'required|numeric',
            'available' => 'required|numeric'
        ]);
            
        // dd($request->all());
        // Book::create([
        //     'title'     => $request->title,
        //     'author'    => $request->author,
        //     'isbn'      => $request->isbn,
        //     'price'     => $request->price,
        //     'available' => $request->available
        // ]);
        Book::create($data);

        return redirect('/books')->with('success', 'Book added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view("books.show", ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view("books.edit", ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'title'     => 'required',
            'author'    => 'required',
            'isbn'      => 'required|numeric',
            'price'     => 'required|numeric',
            'available' => 'required|numeric'
        ]);
            
        // dd($request->all());

        // $book->update([
        //     'title'     => $request->title,
        //     'author'    => $request->author,
        //     'isbn'      => $request->isbn,
        //     'price'     => $request->price,
        //     'available' => $request->available
        // ]);
        
        $book->update($data);

        return redirect('/books')->with('success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect('/books')->with('success', 'Book deleted successfully');
    }

    public function download()
    {
        $books = Book::get();
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('books.download', ['books' => $books]));
        $dompdf->setPaper('A4', 'protrait');
        $dompdf->render();
        return $dompdf->stream("books.pdf", array("Attachment" => 0));
        // $dompdf->stream('Sample.pdf', array("Attachment" => 0));
        // return view('books.download', ['books' => $books]);
    }

    // public function test() {
    //     return "Hello";
    // }
}
