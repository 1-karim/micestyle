<?php

namespace Database\Seeders;

use App\Models\Venue;
use App\Models\VenueCategorie;
use Carbon\Factory;
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

        $this->call(LaratrustSeeder::class);
        \App\Models\User::factory(10)->create();
        VenueCategorie::create(['title'=> 'hotel' ]);
        VenueCategorie::create(['title'=> 'co-working space' ]);
        VenueCategorie::create(['title'=> 'celebration' ]);
        for($i=0;$i<10;$i++){
            Venue::create([
            'name'=>'Test Hotel ',
            'address' => '1 Rue de l\'adresse',
            'venue_category_id' => 1,
            'longitude'=>0,
            'latitude'=>0,
            'likes'=>0,
            'logo'=>'']);
        }
    }
}
