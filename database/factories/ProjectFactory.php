<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'tags' => json_encode([1 => $this->faker->word]),
            'url' => $this->faker->url(),
            'image' => $this->faker->image($dir = '/tmp', $width = 640, $height = 480)
        ];
    }
}