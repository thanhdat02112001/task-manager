<?php

namespace App\Console\Commands;

use App\Models\Todo;
use Carbon\Carbon;
use Illuminate\Console\Command;

class RepeatTaskDaily extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:repeat-task-daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $dailyTaskRepeat = Todo::where('repeat', '=', 1)->whereDate('updated_at', '=', Carbon::today()->format('Y-m-d'))->get();
        foreach($dailyTaskRepeat as $task)
        {
            $data = [
                'name' => $task->name,
                'user_id' => $task->user_id,
                'due_date' => $task->due_date ? self::convertNewTime($task->due_date) : null,
                'remind' => $task->remind ? self::convertNewTime($task->remind) : null,
                'repeat' => $task->repeat,
                'status' => 0,
                'important' => $task->important,
                'note' => $task->note ? $task->note : null
            ];
            Todo::create($data);
        }
    }
    public function convertNewTime($time)
    {
        $newTime = Carbon::createFromFormat('Y-m-d H:i:s',$time)->addDay();
        return $newTime->format('Y-m-d H:i:s');
    }
}
