<?php

namespace Database\Seeders;

use App\Models\Available;
use Illuminate\Database\Seeder;

class AvailableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Available::create([
            'name'=> 'أجهزة الكمبيوتر',
        ]);
        Available::create([
            'name'=> 'أندرويد',
        ]);
        Available::create([
            'name'=> 'IOS',
        ]);
    }
}
