<?php

namespace App\Http\Controllers\Api\V1;

use App\Book;
use App\Http\Controllers\Controller;
use App\Http\Resources\MainResource;

class BooksController extends Controller
{

    public function index()
    {
        $books = Book::get(['id','title']);

        return $books;
    }

    public function show($id)
    {
        return new MainResource(Book::with('authors')->findOrFail($id));
    }

}
