<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sellers')->insert([
            'name' => 'Kemakmooran',
            'phone' => '08123871273',
            'city' => 'Jakarta',
            'address' => 'Jl Pluit Karang Asin No.1',
            'reputation_point' => '0',
            'user_id' => '1',
            'image' => 'monstera.jpg',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        DB::table('sellers')->insert([
            'name' => 'Sinar J.',
            'phone' => '08123812314',
            'city' => 'Semarang',
            'address' => 'Jl Semarang Raya No.2',
            'reputation_point' => '0',
            'user_id' => '2',
            'image' => 'monstera.jpg',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        DB::table('sellers')->insert([
            'name' => 'Bangun T.',
            'phone' => '08423819237',
            'city' => 'Tangerang',
            'address' => 'Jl Raya Tangerang No.2',
            'reputation_point' => '0',
            'user_id' => '3',
            'image' => 'monstera.jpg',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
