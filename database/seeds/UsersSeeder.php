<?php

use App\User;
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
        $faker = Faker\Factory::create();

        $user = new User;
        $user->name = "Laralight";
        $user->email = "admin@admin.com";
        $user->username = "laralight";
        $user->password = bcrypt('123456');
        $user->gender = 'male';
        $user->role_id = 1;
        $user->save();

        foreach(range(1, 5) as $i) {
        		$user = new User;
		        $user->name = $faker->firstname;
		        $user->email = $faker->unique()->safeEmail;
		        $user->username = $faker->username;
		        $user->password = bcrypt('123456');
		        $user->mobile = mt_rand(0, 1) ? "+20" . rand(1000000000, 1199999999) : null;
		        $user->gender = mt_rand(0, 1) ? 'male' : 'female';
		        $user->save();
        }
    }
}
