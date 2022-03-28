<?php

namespace App\Http\Controllers\Api\V1;

use App\Book;
use App\Http\Controllers\Controller;
use App\Http\Resources\MainResource;

class MainController extends Controller
{
    public function index()
    {
        $books = Book::with('authors')->get();

        return MainResource::collection($books);
    }

}
