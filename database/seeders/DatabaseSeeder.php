<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Todo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 1 ; $i<= 30; $i++) {
            $countTodo = rand(1, 10);
            $created_at = now()->subDays($i);
            Todo::factory($countTodo)->create([
                'created_at' => $created_at,
                'updated_at' =>  $created_at,
            ]);
      }
    }
}
