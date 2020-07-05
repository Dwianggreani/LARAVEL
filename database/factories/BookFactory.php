<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'judulbuku' => $faker->Title,
        'isbn' => $faker->e164PhoneNumber,
        'pengarang' => $faker->name,
        'penerbit' => $faker->name,
    ];
});
