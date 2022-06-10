<?php

namespace Database\Seeders;

use App\Models\departments;
use App\Models\offices;
use App\Models\positions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $positions_data = [
            'бўлим бошлиғи',
            'бўлим бошлиғи ўринбосари',
            'МТЎМ бошлиғи',
            'МТЎМ бошлиғи ўринбосари',
            'бўлинма бошлиғи',
            'катта тезкор вакил',
            'катта тезкор ходим',
            'катта ўқитувчи',
            'ўқитувчи',
            'психолог',
            'МТБИ',
            'Бош инспектор',
            'катта инспектор',
            'инспектор',
        ];

       foreach ($positions_data as $value) {
            positions::create(['position_name'=>$value]);
        }
        $office = [0,1,2,3];

        foreach ($office as $value) {
            offices::create(['office_number'=>$value]);
        }
        $deparments_data = [
            '1-бўлим',
            '2-бўлим',
            '3-бўлим',
            '4-бўлим',
            '5-бўлим',
            '6-бўлим',
            '7-бўлим',
            '8-бўлим',
            '9-бўлим',
            '10-бўлим (ФЭО)',
            'МТЎМ'
        ];

        foreach ($deparments_data as $value) {
            departments::create(['dep_name'=>$value]);
        }

    }
}
