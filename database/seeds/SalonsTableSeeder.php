<?php

use Illuminate\Database\Seeder;

class SalonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('salons')->insert([
          'name' => 'Even101',
          'address'=> 'somewhere 1202'
      ]);
    }
}
