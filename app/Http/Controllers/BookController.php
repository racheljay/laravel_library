<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::all();
        return $book;
    }

    public function show($id)
    {


        $book = Book::findOrFail($id);
        return $book;
    }

    public function filter($author_id)
    {
        $book = Book::where('author_id', $author_id)->get();
        return $book;
    }

    public function create(Request $request)
    {
        $book = new Book;
        $book->title = request('title');
        $book->author_id = request('author_id');
        $book->excerpt = request('excerpt');
        $book->isbn = request('isbn');
        $book->pages = request('pages');
        $book->cost = request('cost');
        $book->value = request('value');
        $book->released = request('released');
        $book->save();
    }

    public function update($id) {
        $book = Book::find($id);
        $book->title = request('title');
        $book->author_id = request('author_id');
        $book->excerpt = request('excerpt');
        $book->isbn = request('isbn');
        $book->pages = request('pages');
        $book->cost = request('cost');
        $book->value = request('value');
        $book->released = request('released');
        $book->save();
    }

    public function delete(Request $request) 
    {
        $input = $request->all();
        $book = Book::find($input['id']);
        $book->delete();
    }
}
