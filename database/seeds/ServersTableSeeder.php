<?php

use Illuminate\Database\Seeder;
use App\Server;
class ServersTableSeeder extends Seeder
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
            Server::create([
                'user_id'            => $faker->numberBetween(1, 4),
                'client_id'          => $faker->unique()->numberBetween(1, 50),
                'server_company_name' => $faker->company,
                'server_due_date'     => $faker->date($format = 'Y-m-d'),
                'server_past_due'     => $faker->randomElement(['yes', 'no']),
                'server_notes'        => $faker->text()
            ]);
        }
    }
}
