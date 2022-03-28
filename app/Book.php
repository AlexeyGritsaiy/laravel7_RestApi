<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property string $id
 */
class Book extends Model
{
    protected $fillable = ['title'];

    public function publishingHouse(): HasOne
    {
        return  $this->hasOne(PublishingHouses::class, 'id','publishing_house_id');
    }

    public function authors(): BelongsToMany
    {
        return $this->belongsToMany(Author::class,'author_book','book_id','author_id');
    }
}
