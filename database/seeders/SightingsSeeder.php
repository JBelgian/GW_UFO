<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SightingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sightings = [];
        $sightings = [
            [
                'user_id' => 1,
                'date_time' => Carbon::now(),
                'location' => 'Genk',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu hendrerit metus.',
                'category' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => 1,
                'date_time' => Carbon::now(),
                'location' => 'Brussel',
                'description' => 'Pellentesque volutpat tellus vitae justo viverra scelerisque.',
                'category' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => 2,
                'date_time' => Carbon::now(),
                'location' => 'Oostende',
                'description' => 'Praesent ac rhoncus leo.',
                'category' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        DB::table('sightings')->insert($sightings);
    }
}
