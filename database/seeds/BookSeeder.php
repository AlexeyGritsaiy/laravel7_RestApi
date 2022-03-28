<?php

use App\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        factory(Book::class, 100)->create();
    }
}
