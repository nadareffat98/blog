<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    
     /* The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    
     /* Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->text(),
            'user_id' => $this->faker->numberBetween($min = 1, $max =2) 
        ];
    }
}
