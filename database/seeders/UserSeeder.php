<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
        DB::table('users')->insert([
            'name' => 'Fica',
            'email' => 'fica@binus.com',
            'password' => bcrypt('fica'),
            'phone' => '08123812314',
            'address' => 'Jl Raya Serpong No.2',
            'image' => 'trash.jpg',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        DB::table('users')->insert([
            'name' => 'Delvin',
            'email' => 'delvin@binus.com',
            'password' => bcrypt('delvin'),
            'phone' => '08423819237',
            'address' => 'Jl Raya Serpong No.2',
            'image' => 'monsteravariegata.jpg',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@tanamio.com',
            'password' => bcrypt('admin'),
            'phone' => '0000000000',
            'address' => 'Admin Road',
            'image' => 'monstera.jpg',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
