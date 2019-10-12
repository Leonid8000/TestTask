<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    private $cities = ["not selected","Kyiv", "Kharkiv", "Dnipro", "Donetsk", "Donetsk", "Lviv", "Kryvyi Rih", "Poltava", "Zaporizhia", "Kherson"];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            foreach ($this->cities as $city) {
                DB::table('cities')->insert([
                    'name' => $city
                ]);
            }
    }
}
