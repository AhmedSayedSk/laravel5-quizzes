<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'title' => 'Administrator (can create other users)',],
            ['id' => 3, 'title' => 'subscriper',],
        ];

        foreach ($items as $item) {
            Role::create($item);
        }
    }
}
