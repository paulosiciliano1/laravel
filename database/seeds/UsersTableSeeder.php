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
      DB::table('users')->insert([
          'first_name' => 'Even',
          'last_name' => 'Master'
          'email' => 'master@even.com',
          'password' => bcrypt('evenMaster'),
          'role_id' => 1,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);
    }
}
