<?php

use Illuminate\Database\Seeder;

class Province extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonProvince = \Illuminate\Support\Facades\File::get('database/json/province.json');
        $provinces = json_decode($jsonProvince);
        if ($provinces) {
            foreach ($provinces as $province) {
                $addProvince = new \App\Model\Province();
                $addProvince->id = $province[0];
                $addProvince->name = $province[1];
                $addProvince->save();
            }
        }
    }
}
