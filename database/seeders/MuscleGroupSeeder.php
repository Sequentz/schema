<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuscleGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $musclegroups = [
            ['name' => 'Chest'],
            ['name' => 'Back'],
            ['name' => 'Legs'],
            ['name' => 'Shoulders'],
            ['name' => 'Biceps'],
            ['name' => 'Triceps'],
            ['name' => 'Core'],
        ];

        DB::table(table: 'musclegroups')->insert(values: $musclegroups);
    }
}
