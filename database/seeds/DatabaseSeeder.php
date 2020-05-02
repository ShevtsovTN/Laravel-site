<?php

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
        $this->call([
            ReviewSeeder::class,
            ListingEnSeeder::class,
            ListingEsSeeder::class,
            ListingRuSeeder::class
        ]);
    }
}
