<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'qwerty',
            'email' =>'qwerty@qwerty.com',
            'password' => bcrypt(value('qwerty'))
        ]);
    }
}
