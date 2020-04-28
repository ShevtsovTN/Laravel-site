<?php

use App\Models\Listing;
use Illuminate\Database\Seeder;

class ListingEnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Listing::class, 18)->create();
    }
}
