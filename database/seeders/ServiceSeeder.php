<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => 'Pemasangan Lampu Taman',
            'description' => 'Lampu Taman biar cakep gitu deh di malam hari',
            'estimation_day' => '7',
            'seller_id' => '1',
            'price' => '5499000',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        DB::table('services')->insert([
            'name' => 'Pembersihan Taman Liar',
            'description' => 'Biar tanaman liar ini tidak merusak pemandangan nan indah taman mu!',
            'estimation_day' => '1',
            'seller_id' => '2',
            'price' => '200000',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        DB::table('services')->insert([
            'name' => 'Redesigning Home Forest',
            'description' => 'Suasana sejuk tentu membuat hati sejuk juga!',
            'estimation_day' => '2',
            'seller_id' => '3',
            'price' => '999000',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
