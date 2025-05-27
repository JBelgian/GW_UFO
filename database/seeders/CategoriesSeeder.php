<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [];
        $categories = [
            [
                'description' => 'Object'
            ],
            [
                'description' => 'Lichtpunt(en)'
            ],
            [
                'description' => 'Vluchtpad'
            ],
            [
                'description' => 'Levensvorm'
            ],
            [
                'description' => 'Ontvoering'
            ]
        ];
        DB::table('categories')->insert($categories);
    }
}
