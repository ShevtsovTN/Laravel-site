<?php

use App\Models\ListingEs;
use Illuminate\Database\Seeder;

class ListingEsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ListingEs::class, 18)->create();
    }
}
