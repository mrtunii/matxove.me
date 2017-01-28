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
            $user = new \App\Models\User();
            $user->firstname = 'ოთარ';
            $user->lastname = 'მამესწარაშვილი';
            $user->email = 'otarmames@gmail.com';
            $user->password = bcrypt('Qz69fdk1');
            $user->mobile = '598202198';
            $user->save();



        $user = new \App\Models\User();
        $user->firstname = 'გიორგი';
        $user->lastname = 'ზაზაძე';
        $user->email = 'gio@gmail.com';
        $user->mobile = '598222111';
        $user->password = bcrypt('12345678');

        $user->save();
    }
}
