<?php

use Illuminate\Database\Seeder;

class District extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonDistrict = \Illuminate\Support\Facades\File::get('database/json/district.json');
        $districts = json_decode($jsonDistrict);
        if ($districts) {
            foreach ($districts as $district) {
                $addDistrict = new \App\Model\District();
                $addDistrict->id = $district[0];
                $addDistrict->name = $district[1];
                $addDistrict->province_id = $district[2];
                $addDistrict->save();
            }
        }
    }
}
