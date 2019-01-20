<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'username' => null, 'mobile' => null, 'password' => '$2y$10$FnoJMHgybZpukLAItDogeubuxguHseNvHG9aU3Owt.rRJgKmPw4L.', 'gender' => null, 'role_id' => null, 'remember_token' => '',],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
