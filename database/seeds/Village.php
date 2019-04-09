<?php

use Illuminate\Database\Seeder;

class Village extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonVillage = \Illuminate\Support\Facades\File::get('database/json/village.json');
        $villages = json_decode($jsonVillage);
        if ($villages) {
            foreach ($villages as $village) {
                $addVillage = new \App\Model\Village();
                $addVillage->id = $village[0];
                $addVillage->name = $village[1];
                $addVillage->ward_id = $village[2];
                $addVillage->save();
            }
        }
    }
}
