<?php

use Illuminate\Database\Seeder;
use App\Contact;
class ContactsTableSeeder extends Seeder
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
            Contact::create([
                'user_id'            => $faker->numberBetween(1, 4),
                'client_id'          => $faker->unique()->numberBetween(1, 50),
                'contact_first_name' => $faker->firstName,
                'contact_last_name'  => $faker->lastName,
                'contact_phone'      => $faker->phoneNumber,
                'contact_email'      => $faker->email,
                'contact_notes'      => $faker->paragraph
            ]);
        }
    }
}
