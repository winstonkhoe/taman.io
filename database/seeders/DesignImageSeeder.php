<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('images')->insert([
        //     'filename' => 'monstera.jpg',
        //     'created_at' => Carbon::now()->toDateTimeString(),
        // ]);
        // DB::table('images')->insert([
        //     'filename' => 'monsteravariegata.jpg',
        //     'created_at' => Carbon::now()->toDateTimeString(),
        // ]);
        // DB::table('images')->insert([
        //     'filename' => 'trash.jpg',
        //     'created_at' => Carbon::now()->toDateTimeString(),
        // ]);
        DB::table('design_images')->insert([
            'filename' => 'side-garden_type-A.jpg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'design_id' => '1'
        ]);
        DB::table('design_images')->insert([
            'filename' => 'back-garden_type-U.jpg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'design_id' => '2'
        ]);
        DB::table('design_images')->insert([
            'filename' => 'back-garden_type-Z.jpg',
            'created_at' => Carbon::now()->toDateTimeString(),
            'design_id' => '3'
        ]);
    }
}
