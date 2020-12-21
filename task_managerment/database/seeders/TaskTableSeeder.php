<?php

namespace Database\Seeders;

use App\Models\Tasks;
use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new Tasks();
        $task->id = 1;
        $task->name = 'tong van dung';
        $task->title = 'cong viec 1';
        $task->content = 'noi dung cong viec';
        $task->due_date = '2020-10-20';
        $task->image = 'image1.jpg';
        $task->save();
    }
}
