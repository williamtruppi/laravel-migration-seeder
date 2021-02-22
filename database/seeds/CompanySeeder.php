<?php

use App\Company;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newComp = new Company();
            $newComp->name = $faker->company();
            $newComp->description = $faker->catchPhrase();
            $newComp->address = $faker->address();
            $newComp->country = $faker->country();
            $newComp->save();
        }
    }
}
