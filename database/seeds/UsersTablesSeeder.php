<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('users')->delect();
        User::create(array(
            'name'          => 'Human Resource',
            'email'         => 'allweb.hr@allweb.com.kh',
            'password'      =>  Hash::make('pssword'),
            'type'          => 'Admin',
            'remember_token'=> str_random(10),
        ));

        //
//
//        User::create([
//            'name'              =>  'Human Resource',
//            'email'             =>  'allweb.hr@allweb.com',
//            'password'          =>  Hash::make('password'),
//            'remember_token'    =>  str_random(10),
//        ]);
    }
}
