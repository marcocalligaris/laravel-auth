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
        $user->name = 'marco';
        $user->email = 'marco@gmail.it';
        $user->password = bcrypt('calligaris');
        $user->save();
    }
}
