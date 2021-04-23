<?php

namespace Database\Seeders;
use App\Models\Company;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i <=20; $i++) {
            Company::create([
                'name_company' => $faker->company,
                'nit_company' => $faker->creditCardNumber,
                'address_company' => $faker->address
            ]);
        }
    }
}
