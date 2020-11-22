<?php
  
  use Illuminate\Database\Seeder;
  use Illuminate\Support\Facades\DB;
  
  class UserSeeder extends Seeder
  {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->delete();
      $users = [
        [
          'id' => 1,
          'name' => 'Test User',
          'email' => 'test@example.com',
          'password' => bcrypt('password'),
        ],
        [
          'id' => 2,
          'name' => 'Surajit Basak',
          'email' => 'surajitbasak109@gmail.com',
          'password' => bcrypt('password@123'),
        ]
      ];
      DB::table('users')->insert($users);
    }
  }
