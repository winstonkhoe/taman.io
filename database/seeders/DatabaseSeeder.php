<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(ArtistSeeder::class);
        $this->call(SellerSeeder::class);
        $this->call(WalletSeeder::class);
        $this->call(DesignSeeder::class);
        $this->call(DesignImageSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(GardenOfferSeeder::class);
    }
}
