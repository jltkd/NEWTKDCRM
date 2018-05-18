<?php

use Illuminate\Database\Seeder;
use App\Domain;
class DomainsTableSeeder extends Seeder
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
            Domain::create([
                'user_id'                  => $faker->numberBetween(1, 4),
                'client_id'                => $faker->unique()->numberBetween(1, 50),
                'domain_purchased_through' => $faker->company,
                'domain_ip'                => $faker->ipv4,
                'domain_years_paid'        => $faker->numberBetween(1, 10),
                'domain_expire_date'       => $faker->date($format = 'Y-m-d'),
                'domain_ssl'               => $faker->randomElement(['yes', 'no']),
                'domain_ssl_expire_date'   => $faker->date($format = 'Y-m-d', $max = 'now'),
                'domain_email'             => $faker->companyEmail,
                'domain_notes'             => $faker->text
            ]);
        }
    }
}
