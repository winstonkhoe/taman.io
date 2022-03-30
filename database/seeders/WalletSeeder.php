<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wallets')->insert([
            'user_id' => '1',
            'balance' => '0',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        DB::table('wallets')->insert([
            'user_id' => '2',
            'balance' => '0',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        DB::table('wallets')->insert([
            'user_id' => '3',
            'balance' => '0',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
