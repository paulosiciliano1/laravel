<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = array(
        array('first_name' => 'Even','last_name' => 'Master','email' => 'master@eben.com',
        'password' => bcrypt('evenMaster'),'role_id' => 1,'created_at' => Carbon::now(),'updated_at' => Carbon::now())
        ,
        array('first_name' => 'Paulo','last_name' => 'Siciliano','email' => 'paulo@eben.com',
        'password' => bcrypt('paulopass'),'role_id' => 2,'created_at' => Carbon::now(),'updated_at' => Carbon::now())
      );
      DB::table('users')->insert($data);
    }
}
