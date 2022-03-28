<?php

use App\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        factory(Author::class, 100)->create();
    }
}
