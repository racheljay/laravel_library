<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function show($id) {

        
        $author = Author::findOrFail($id);
        return $author;
    }

    public function index() {
        
        $author = Author::all();
        return $author;
    }

}
