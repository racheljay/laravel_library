<?php

namespace Database\Factories; 

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class BookFactory extends Factory {
    protected $model = Book::class;

    public function definition() {
        return [
            'title' => $this->faker->word,
            'author_id' => $this->faker->randomDigitNot(0),
            'excerpt' => $this->faker->text,
            'isbn' => $this->faker->isbn13,
            'pages' => $this->faker->randomNumber(3),
            'cost' => $this->faker->randomNumber(2),
            'value' => $this->faker->randomNumber(2),
            'released' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
