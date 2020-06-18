<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function books(Request $request)
    {
        $sort = $request->session()->get('orderBy', 'title');
        if($request->input('exampleRadios')){
            echo $request->input('exampleRadios');
            $sort = $request->input('exampleRadios');
            $request->session()->put('orderBy',$sort);
        }
        
        return view('books',['books' => Book::orderBy($sort)->paginate(15)]);
    }
}
