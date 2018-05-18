<?php

use Illuminate\Database\Seeder;
use App\Client;
class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Client::create([
                'user_id'        => $faker->numberBetween(1, 4),
                'client_name'    => $faker->company,
                'client_status'  => $faker->randomElement(['active', 'nonactive']),
                'client_website' => $faker->url,
                'client_address' => $faker->streetAddress,
                'client_city'    => $faker->city,
                'client_state'   => $faker->state,
                'client_zip'     => $faker->postcode,
                'client_phone'   => $faker->phoneNumber,
                'client_notes'   => $faker->paragraph
            ]);
        }
    }
}
