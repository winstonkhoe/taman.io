<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designs')->insert([
            'name' => 'Side Minimalist Garden - Type A',
            'description' => 'Minimalist yet sexy',
            'artist_id' => '1',
            'price' => '749000',
            'created_at' => now(),
        ]);
        DB::table('designs')->insert([
            'name' => 'Back Garden - Type U',
            'description' => 'Rindang enak nyaman',
            'artist_id' => '2',
            'price' => '1000000',
            'created_at' => now(),
        ]);
        DB::table('designs')->insert([
            'name' => 'Back Garden - Type Z',
            'description' => 'Sedikit sepi tapi nyaman asli',
            'artist_id' => '3',
            'price' => '1490000',
            'created_at' => now(),
        ]);
    }
}
