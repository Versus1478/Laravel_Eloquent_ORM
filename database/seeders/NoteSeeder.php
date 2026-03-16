<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('notes')->insert([
            [
                'user_id'=>1,
                'title'=>'Prvá poznámka',
                'body'=>'Text prvej poznámky',
                'status'=>'published',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'user_id'=>1,
                'title'=>'TODO list',
                'body'=>'spraviť projekt',
                'status'=>'draft',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'user_id'=>2,
                'title'=>'Nápad',
                'body'=>'REST API aplikácia',
                'status'=>'published',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'user_id'=>2,
                'title'=>'Škola',
                'body'=>'odovzdať zadanie',
                'status'=>'draft',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'user_id'=>3,
                'title'=>'Shopping',
                'body'=>'milk bread',
                'status'=>'published',
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        ]);
    }
}
