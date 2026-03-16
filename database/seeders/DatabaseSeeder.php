<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('note_category')->delete();
        DB::table('notes')->delete();
        DB::table('categories')->delete();
        DB::table('users')->delete();

        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            NoteSeeder::class,
            NoteCategorySeeder::class,
        ]);
        Category::factory()->count(10)->create();
    }
}
