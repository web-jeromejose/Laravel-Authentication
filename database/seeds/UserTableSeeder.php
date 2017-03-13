<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
     	//using own define users
           DB::table('users')->insert([
           	'name'=> 'Guest Number 1'
           	,'email' => 'user@user.com'
           	,'password'=> Hash::make('123456')
           	, 'remember_token' => str_random(10),
           	]);

             //using factory
     	factory(App\User::class,10)->create();

    }
}
