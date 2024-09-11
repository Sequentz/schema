<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MuscleGroup;





class MuscleGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definitions(): array
    {
        return [
            //
        ];
    }
    protected $model = MuscleGroup::class;

    public function definition(): array
    {
        return [
            MuscleGroup::factory()->count(count: 10)->create()

        ];
    }
}
