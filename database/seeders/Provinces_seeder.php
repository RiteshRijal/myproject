<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Provinces;

class Provinces_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param $Provinces
     * @return void
     */
    public function run($Provinces)
    {
        $provinces= new provinces;
        $Provinces->province="bagmati";
        $provinces->save();
    }
}
