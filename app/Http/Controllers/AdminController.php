<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(Book $book)
    {
        $books = $book->get_all_books();

        return view('admin.index', compact('books'));
    }

    public function show(Book $book, $id)
    {
        $book = $book->get_single_book($id);

        return view('admin.show', compact('book'));
    }
}
