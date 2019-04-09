<?php

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
         $this->call(Province::class);
         $this->call(District::class);
         $this->call(Ward::class);
         $this->call(Village::class);
         $this->call(Role::class);
    }
}
