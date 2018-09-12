<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function get_all_books()
    {
        $output = DB::table('books')->get();

        return $output;
    }
}
