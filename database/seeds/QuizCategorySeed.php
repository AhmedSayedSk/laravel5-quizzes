<?php

use Illuminate\Database\Seeder;

class QuizCategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'icon' => '/tmp/phpP9kYnR',],

        ];

        foreach ($items as $item) {
            \App\QuizCategory::create($item);
        }
    }
}
