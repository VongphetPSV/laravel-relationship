<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{

    protected $model = Image::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fileName = $this->faker->numberBetween(1,10) . '.jpg';

        return [
            'path' => "img/products/{$fileName}",
        ];
    }

    public function user()
    {
        $fileName = $this->faker->numberBetween(1,6) . '.jpg';

        return $this->state([
            'path' => "img/users/{$fileName}",
        ]);
    }


}
