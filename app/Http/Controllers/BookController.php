<?php

namespace App\Http\Controllers;


use App\Mail\BookMail;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookController extends Controller
{
    public function index(){

        $title = 'Libreria RR';
        $books = Book::all();
        return view('index', ['books'=> $books], compact('title'));
        
    }

    public function create(){

        $title = 'Libreria RR';
        return view('create', compact('title'));
       
    }

    public function store(Request $request){

        $request->validate(['name'=>['required'], 'author'=>['required'], 'year'=>['required'], 'pages'=>['required']]);
        $book =Book::create([
            'name'=> $request->input('name'),
            'author'=> $request->input('author'),
            'pages'=> $request->input('pages'),
            'year'=> $request->input('year'),
            ]);

            Mail::to('admin@rrlibrary.it')->send(new BookMail($book));
            return redirect()->route('books.index')->with('success', 'Libro aggiunto correttamente');

    }

    public function destroy(Book $book){

        $book-> delete();
        return redirect()->route('books.index')->with('success', 'Libro eliminato correttamente');

    }
}
