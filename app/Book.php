<?php

namespace App;

use DB;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $fillable = [
        'name',
        'price',
        'cover',
        'colour',
        'size',
        'theme',
    ];

    /**
     * Get all book record from DB
     *
     * @return  var    All Book records
     *
     **/
    public function get_all_books()
    {
        $output = DB::table('books')->get();

        return $output;
    }

    /**
     * Get single book record from DB
     *
     * @var int    book id
     * @return  var    Book record
     *
     **/
    public function get_single_book($id)
    {

        $output = DB::table('books')->find($id);
        return $output;
    }

    /**
     * Delete book record from DB
     *
     * @var int    book id
     * @return  bool
     *
     **/
    public function delete_book($id)
    {
        $result = DB::table('books')->delete($id);
        return $result;
    }

    /**
     * Save new book instance to the DB
     *
     * @var form request info
     * @return  bool
     *
     **/
    public function add_book($request)
    {

        $book = new Book;
        $book->name   = request('name');
        $book->price  = request('price');
        $book->cover  = request('cover');
        $book->colour = request('colour');
        $book->size   = request('size');
        $book->theme  = request('theme');

        $result = $book->save();
        return $result;
    }

}
