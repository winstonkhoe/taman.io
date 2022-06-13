<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GardenOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('garden_offers')->insert([
            'design_id' => '1',
            'seller_id' => '1',
            'price' => '5499000',
            'created_at' => now(),
        ]);
        DB::table('garden_offers')->insert([
            'design_id' => '1',
            'seller_id' => '2',
            'price' => '4500000',
            'created_at' => now(),
        ]);
        DB::table('garden_offers')->insert([
            'design_id' => '1',
            'seller_id' => '3',
            'price' => '4799000',
            'created_at' => now(),
        ]);

        DB::table('garden_offers')->insert([
            'design_id' => '2',
            'seller_id' => '1',
            'price' => '7199000',
            'created_at' => now(),
        ]);
        DB::table('garden_offers')->insert([
            'design_id' => '2',
            'seller_id' => '2',
            'price' => '5749000',
            'created_at' => now(),
        ]);
        DB::table('garden_offers')->insert([
            'design_id' => '2',
            'seller_id' => '3',
            'price' => '6999000',
            'created_at' => now(),
        ]);

        DB::table('garden_offers')->insert([
            'design_id' => '3',
            'seller_id' => '1',
            'price' => '7300000',
            'created_at' => now(),
        ]);
        DB::table('garden_offers')->insert([
            'design_id' => '3',
            'seller_id' => '2',
            'price' => '8199000',
            'created_at' => now(),
        ]);
        DB::table('garden_offers')->insert([
            'design_id' => '3',
            'seller_id' => '3',
            'price' => '10499000',
            'created_at' => now(),
        ]);
    }
}
