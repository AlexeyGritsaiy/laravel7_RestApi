<?php

namespace App\Http\Controllers\Api\V1;

use App\Author;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthorsRequest;
use App\Http\Resources\AuthorsResource;
use Illuminate\Http\Response;

class AuthorsController extends Controller
{

    public function index()
    {
        $authors = Author::get();

        return  AuthorsResource::collection($authors);
    }

    public function store(AuthorsRequest $request)
    {
       $authors = Author::create($request->validated());

       return new AuthorsResource($authors);
    }

    public function show($id)
    {
        return Author::with('book')->findOrFail($id);
    }


    function update(AuthorsRequest $request, Author $author)
    {
        $author->update($request->validated());

        return new AuthorsResource($author);
    }

    public function destroy(Author $author)
    {
        $author->delete();

        return response(null,Response::HTTP_NO_CONTENT);
    }


}
