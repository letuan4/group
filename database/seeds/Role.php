<?php

use Illuminate\Database\Seeder;

class Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jsonRole = \Illuminate\Support\Facades\File::get('database/json/role.json');
        $roles = json_decode($jsonRole);

        if ($roles) {
            foreach ($roles as $role) {
                $addRole = new \App\Model\Role();
                $addRole->name = $role[0];
                $addRole->save();
            }
        }
    }
}
