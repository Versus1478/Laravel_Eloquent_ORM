<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::query()->delete();
        $now = now();

        DB::table('categories')->insert([
            ['name' => 'Práca', 'color' => '#ef4444', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Škola', 'color' => '#3b82f6', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Osobné', 'color' => '#22c55e', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Nápady', 'color' => '#a855f7', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'TODO', 'color' => '#f59e0b', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
