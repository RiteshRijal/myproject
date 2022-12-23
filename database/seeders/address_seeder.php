<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;
//use Faker\Factory as Faker;

class address_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $faker=Faker::create();
        $address= new address;
        $address->provinces="bagmati";
        $address->districts="Kathmandu";
        $address->save();

    }
}
