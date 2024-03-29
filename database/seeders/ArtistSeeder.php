<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            'name' => 'WinWin S.',
            'user_id' => '1',
            'reputation_point' => '0',
            'image' => 'monstera.jpg',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        DB::table('artists')->insert([
            'name' => 'JayV0n',
            'user_id' => '2',
            'reputation_point' => '0',
            'image' => 'monstera.jpg',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        DB::table('artists')->insert([
            'name' => 'IniWilliam',
            'user_id' => '3',
            'reputation_point' => '0',
            'image' => 'monstera.jpg',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
