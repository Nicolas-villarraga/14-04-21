<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Companie;
use Faker\Factory as Faker;
class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Faker = Faker::create();
        for($i=0;$i<=50;$i++){
            Companie::create([
            'name' => $Faker->name,
            'nit' => $Faker->nit,
            'address' => $Faker->address,
            'logo' => $Faker ->logo
            ]);
        }
     

    
    }
}
