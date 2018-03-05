<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$admin =  new User();
    	$admin->role_id = 1;
    	$admin->name = 'Admin';
    	$admin->email = 'admin@mastermind.com';
    	$admin->password = bcrypt('admin');
    	$admin->save();
    }
}
