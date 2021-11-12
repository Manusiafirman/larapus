<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\book;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat sample penulis
        $author1 = Author::create(['name' => 'Aam Amirudin']);
        $author2 = Author::create(['name' => 'Salim A Fillah']);
        $author3 = Author::create(['name' => 'M Fauzil Adhim']);

        // membuat sample buku
        $book1 = book::create(['title' => 'Kupinang Kau dengan Hamdalah',
            'amount' => 3, 'author_id' => $author1->id]);
        $book2 = book::create(['title' => 'Jalan Para Pejuang',
            'amount' => 2, 'author_id' => $author2->id]);
        $book3 = book::create(['title' => 'Seminggu Belajar Laravel',
            'amount' => 3, 'author_id' => $author3->id]);
        $book4 = book::create(['title' => 'Menyelami Buku Laravel',
            'amount' => 4, 'author_id' => $author3->id]);
    }
}
