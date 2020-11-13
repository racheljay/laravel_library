<?php
namespace Database\Factories; 

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Author;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AuthorFactory extends Factory {
    protected $model = Author::class;

    public function definition() {
        return [
            'name' => $this->faker->name,
            'dob' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}


