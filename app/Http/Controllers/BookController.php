<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        $book = Book::all();
        return $book;
    }

    public function show($id) {

        
        $book = Book::findOrFail($id);
        return $book;
    }

    public function filter($author_id) {
        $book = Book::where('author_id', $author_id)->get();
        return $book;
    }
}
