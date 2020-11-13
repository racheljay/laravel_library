<?php

namespace App\Http\Controllers;

use DB;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function show($book_id)
    {
        $book = DB::table('books')->where('book_id', $book_id)->first();
        return view('book', [
            'book' => $book
        ]);
    }
}
