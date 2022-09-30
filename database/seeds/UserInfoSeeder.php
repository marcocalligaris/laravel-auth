<?php

use App\User;
use App\Models\UserInfo;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class UserInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();

        foreach($users as $user){
            $user_info = new UserInfo();
            $user_info->user_id = $user->id;
            $user_info->first_name = $faker->firstName();
            $user_info->last_name = $faker->lastName();
            $user_info->address = $faker->address();
            $user_info->phone = $faker->phoneNumber();
            $user_info->birth_date = $faker->year();
            $user->save();
        }
    }
}
