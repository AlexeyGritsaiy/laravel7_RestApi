<?php

namespace App\Http\Resources;

use App\Book;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @extends  Book
 */
class MainResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       return [
            'bookName' => $this->title,
            'publishingHouse' => $this->publishingHouse->name,
            'authors' => BooksResource::collection($this->authors),

        ];
    }
}
