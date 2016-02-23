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

        DB::table('users')->truncate();

    	factory(App\User::class)->create([
    		'name' 		=> 'Sebastián',
    		'last_name'	=> 'Silva Carrasco',
    		'email' 	=> 'sebasilvac88@gmail.com',
    		'role'  	=> 'admin',
    		'password'	=> bcrypt('admin')
    	]);
        
        factory(App\User::class, 49)->create();
    }
}
