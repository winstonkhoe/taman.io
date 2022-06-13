<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Winston',
            'email' => 'winston@binus.com',
            'password' => bcrypt('winston'),
            'phone' => '08123871273',
            'address' => 'Jl Raya Serpong No.1',
            'image' => 'monstera.jpg',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
