<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      

        DB::table('admins')->insert(
                    [
                         'name' => 'Administrator'
                        ,'email' => 'admin@admin.com'
                        ,'job_title' => 'Computer programmer at SGH'
                        ,'password' =>  Hash::make('admin')
                        , 'remember_token' => str_random(10)
                    ]
            );

          //using faker
        factory(App\Admin::class,2)->create();
        

    }
}
