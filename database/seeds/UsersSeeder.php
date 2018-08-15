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
        $faker = Faker\Factory::create();

        $user = new App\Models\Users\User;
        $user->firstname = "developer";
        $user->lastname = "test";
        $user->email = "developer@w.com";
        $user->password = bcrypt('123456');
        $user->type_id = 3;
        $user->save();

        foreach(range(1, 5) as $i) {
            $user = new App\Models\Users\User;
            $user->firstname = $faker->firstname;
            $user->lastname = $faker->lastname;
            $user->email = $faker->unique()->safeEmail;
            $user->password = bcrypt('123456');
            $user->mobile = mt_rand(0, 1) ? "+20" . rand(1000000000, 1199999999) : null;
            $user->gender = mt_rand(0, 1) ? mt_rand(0, 1) : null;
            $user->type_id = mt_rand(1, 3);
            $user->save();
        }
    }
}
