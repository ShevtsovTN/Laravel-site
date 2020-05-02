<?php

use App\Models\ListingEn;
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
        factory(ListingEn::class, 18)->create();
    }
}
