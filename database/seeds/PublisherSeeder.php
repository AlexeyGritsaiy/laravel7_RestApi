<?php

use App\PublishingHouses;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    public function run(): void
    {
        factory(PublishingHouses::class, 20)->create()
            ->each(function (PublishingHouses $model) {
                $model->books()->saveMany(
                    factory(\App\Book::class, random_int(5, 10))->make([
                        'publishing_house_id' => $model->id
                    ])
                );
            });

        foreach (\App\Book::all() as $book) {
            $book->authors()->saveMany(
                factory(\App\Author::class, rand(1, 3))->make()
            );
        }
    }
}
