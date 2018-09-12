<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'id'     => 1,
            'name'   => 'Architecture: Form, Space, and Order',
            'price'  => 100.00,
            'cover'  => 'https://images-na.ssl-images-amazon.com/images/I/41GcsH%2BOejL.jpg',
            'colour' => 'white',
            'size'   => '20.6 x 3 x 27.4 cm',
            'theme'  => 'architecture',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('books')->insert([
            'id'     => 2,
            'name'   => '101 Things I Learned in Architecture School',
            'price'  => 9.00,
            'cover'  => 'https://images-na.ssl-images-amazon.com/images/I/51ktCo7dHTL.jpg',
            'colour' => 'brown',
            'size'   => '17.8 x 2.7 x 12.7 cm ',
            'theme'  => 'architecture',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('books')->insert([
            'id'     => 3,
            'name'   => '30-Second Architecture: The 50 Most Signicant Principles and Styles in Architecture, each Explained in Half a Minute',
            'price'  => 15.00,
            'cover'  => 'https://images-na.ssl-images-amazon.com/images/I/A1OFoayWDkL.jpg',
            'colour' => 'straw',
            'size'   => '18.3 x 1.6 x 23.6 cm',
            'theme'  => 'architecture',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('books')->insert([
            'id'     => 4,
            'name'   => 'Archidoodle: An Architect Activity Book',
            'price'  => 20.00,
            'cover'  => 'https://images-na.ssl-images-amazon.com/images/I/91l5C2YQ9YL.jpg',
            'colour' => 'red',
            'size'   => '21.6 x 1.9 x 27.3 cm ',
            'theme'  => 'architecture',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

    }
}
