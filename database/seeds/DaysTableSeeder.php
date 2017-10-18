<?php

use Illuminate\Database\Seeder;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
          array("day" => "monday"),
          array("day" => "tuesday"),
          array("day" => "wednesday"),
          array("day" => "thursday"),
          array("day" => "friday"),
          array("day" => "saturday"),
          array("day" => "sunday"),
        );
        DB::table('days')->insert($data);
    }
}
