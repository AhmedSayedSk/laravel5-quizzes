<?php

use App\UserAction;
use Illuminate\Database\Seeder;

class UserActionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['id' => 1, 'user_id' => 1, 'action' => 'created', 'action_model' => 'quiz_categories', 'action_id' => 1,],
            ['id' => 2, 'user_id' => 1, 'action' => 'created', 'action_model' => 'quizzes', 'action_id' => 1,],
            ['id' => 3, 'user_id' => 1, 'action' => 'created', 'action_model' => 'roles', 'action_id' => 3,],
        ];

        foreach ($items as $item) {
            UserAction::create($item);
        }
    }
}
