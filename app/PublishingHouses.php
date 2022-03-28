<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PublishingHouses extends Model
{
    protected $fillable = ['name'];

    public function books():HasMany
    {
      return  $this->hasMany(Book::class, 'publishing_house_id', 'id');
    }
}
