<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Book $book)
    {
        $books = $book->get_all_books();

        return view('layouts.master', compact('books'));
    }
}
