<?php

use App\Models\ListingRu;
use Illuminate\Database\Seeder;

class ListingRuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ListingRu::class, 18)->create();
    }
}
