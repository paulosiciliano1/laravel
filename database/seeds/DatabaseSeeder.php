<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(SalonsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
