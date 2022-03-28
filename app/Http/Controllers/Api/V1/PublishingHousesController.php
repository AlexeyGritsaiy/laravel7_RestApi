<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\PublishingHousesRequest;
use App\Http\Resources\PublishingHouseResource;
use App\PublishingHouses;
use Illuminate\Http\Response;

class PublishingHousesController extends Controller
{

    public function index()
    {
        $publishingHouse = PublishingHouses::get(['id','name']);

        return $publishingHouse;
    }

    public function store(PublishingHousesRequest $request)
    {
        $publishingHouse = PublishingHouses::create($request->validated());

        return new PublishingHouseResource($publishingHouse);
    }

    public function show($id)
    {
        return PublishingHouses::with('books')->findOrFail($id);
    }


    public function destroy(PublishingHouses $publishingHouses)
    {
        $publishingHouses->delete();

        return response(null,Response::HTTP_NO_CONTENT);
    }

}
