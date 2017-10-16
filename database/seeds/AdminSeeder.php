<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
        	'name'			=> 'admin',
        	'email'			=> 'mail@mail.com',
        	'phone'			=> '00201017460927',
        	'password'		=> '123456',
        	'membership'	=> 'admin',
        	'gender'	=> 'male',
        ];
        $user['password'] = bcrypt($user['password']);
        $user['api_token'] = str_random(60);
        User::create($user);
    }
}
