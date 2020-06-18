<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function books()
    {
        return view('books',['books' => Book::paginate(15)]);
    }
}
