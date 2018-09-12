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

    public function get_single_book($id)
    {

        $output = DB::table('books')->find($id);
        return $output;
    }

    public function delete_book($id)
    {

        $result = DB::table('books')->delete($id);

        return $result;
    }

}
