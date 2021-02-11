<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $description = $this->faker->sentence;
        return [
            'category_id' => rand(1, 6),
            'type_id' => rand(1, 4),
            'currency_id' => 1,
            'price' => $this->faker->buildingNumber,
            //'image' => \Faker\Provider\Image::image(storage_path() . '/app/public/images/properties', 600, 350, 'business', false),
            'address' => $this->faker->address,
            'environment' => rand(1, 5),
            'description' => $description,
            'full_description' => $this->faker->paragraph,
            'expenses' => $this->faker->buildingNumber,
            'slug' => Str::slug($description),
        ];
    }
}
