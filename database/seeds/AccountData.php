<?php

use Illuminate\Database\Seeder;

class AccountData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $email = "admin@gmail.com";
        $pass = "admin123";
        $type = "admin";
        DB::table('accounts')->insert([
        	'email' => $email,
        	'password' => \Hash::make($pass), // bcrypt()
        	'account_type' => $type,
        	'created_at' => date('Y-m-d H:i:s'),
        	'updated_at' => date('Y-m-d H:i:s')

        ]);
        
    }
}
