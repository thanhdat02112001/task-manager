<?php

namespace App\Console\Commands;

use App\Models\Todo;
use Carbon\Carbon;
use Illuminate\Console\Command;

class RepeatTaskMonthly extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:repeat-task-monthly';

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
        $startTime = Carbon::now()->subMonth()->startOfMonth()->format('Y-m-d H:i:s');
        $endTime = Carbon::now()->subMonth()->endOfMonth()->format('Y-m-d H:i:s');
        $weekyTaskRepeat = Todo::where('repeat', '=', 3)->whereBetween('updated_at', [$startTime, $endTime])->get();
        foreach($weekyTaskRepeat as $task)
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
        $newTime = Carbon::createFromFormat('Y-m-d H:i:s',$time)->addMonth();
        return $newTime->format('Y-m-d H:i:s');
    }
    
}
