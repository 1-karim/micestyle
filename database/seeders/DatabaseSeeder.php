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
            $name = 'Test Hotel '.$i;
            Venue::create([
            'name'=>$name,
            'email' => 'plaza'.$i.'@mail.com',
            'description'=> 1,
            'venue_category_id' => 1,
            'longitude'=>0,
            'description'=>'Sample description'.$i,
            'address' => $i.' Rue de l\'adresse',
            'latitude'=>0,
            'phone'=>'22 000 000',
            'likes'=>0,
            'logo'=>'']);
        }
    }
}
