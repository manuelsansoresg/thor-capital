<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'admin_tor';
        $user->email = 'contacto@tor-capital.com';
        $user->password = Hash::make('*25#7vCgJ$nK');
        $user->save();
    }
}
