<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<10; $i++){
            DB::table('tasks')->insert([
                'title' => str_random(10),
                'created_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
