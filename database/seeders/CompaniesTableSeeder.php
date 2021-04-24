<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Companie;
use Faker\Factory as Faker;
class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *address
     * @return void
     */
    public function run()
    {
        //
        $Faker =Faker::Create();
        for($i=0;$i<=35;$i++) {
            Companie::create([
                'name'=>$Faker->company,
                'nit'=>$Faker->creditCardNumber,
                'address'=>$Faker->address,
                

        ]);
    }
    }
}
