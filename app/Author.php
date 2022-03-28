<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    protected $fillable = ['name'];

    public function book()
    {
        return $this->belongsToMany(Book::class,'author_book','author_id','book_id');
    }

//    public function books(): BelongsToMany
//    {
//        return $this->belongsToMany(Author::class,'author_book','book_id','author_id');
//    }
//
//    public function bookList():HasMany
//    {
//        return $this->hasMany(Book::class,'id','book_id');
//    }
}
