<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = array(
        array('name' => 'haircut male'),
        array('name' => 'haircut female'),
        array('name' => 'full hair highlights'),
        array('name' => 'blowout'),
        array('name' => 'makeup'),
        array('name' => 'toner'),
        array('name' => 'keratine')
      );
      DB::table('services')->insert($data);
    }
}
