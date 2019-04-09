<?php

use Illuminate\Database\Seeder;

class Ward extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonWard = \Illuminate\Support\Facades\File::get('database/json/ward.json');
        $wards = json_decode($jsonWard);
        if ($wards) {
            foreach ($wards as $ward) {
                $addWard = new \App\Model\Ward();
                $addWard->id = $ward[0];
                $addWard->name = $ward[1];
                $addWard->district_id = $ward[2];
                $addWard->save();
            }
        }
    }
}
