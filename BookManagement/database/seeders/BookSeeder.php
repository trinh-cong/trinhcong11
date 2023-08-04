<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        Book::create([
            'authorid' => 1,
            'title' => 'Book A',
            'ISBN' => 'A001',
            'pub_year' => 2000,
            'available' => 10,
        ]);

        Book::create([
            'authorid' => 2,
            'title' => 'Book B',
            'ISBN' => 'B001',
            'pub_year' => 2000,
            'available' => 10,
        ]);

        Book::create([
            'authorid' => 3,
            'title' => 'Book C',
            'ISBN' => 'C001',
            'pub_year' => 2002,
            'available' => 15,
        ]);

        Book::create([
            'authorid' => 2,
            'title' => 'Book D',
            'ISBN' => 'D001',
            'pub_year' => 1999,
            'available' => 5,
        ]);

        Book::create([
            'authorid' => 2,
            'title' => 'Book E',
            'ISBN' => 'E001',
            'pub_year' => 2010,
            'available' => 7,
        ]);
    }
}

