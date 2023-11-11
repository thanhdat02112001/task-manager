<?php

namespace App\Console\Commands;

use App\Models\Todo;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;

class NotifyDueTasks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:notify-due-tasks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notify task about to due';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $about_due_tasks = Todo::where('status', '=', 0)->whereBetween('due_date', [now(), now()->addHour()])->get();
        foreach ($about_due_tasks as $task) {
            $userDeviceToken =  User::find($task->user_id)->device_token;
            $data = [
                "registration_ids" => array($userDeviceToken),
                "notification" => [
                    "title" => "Task Manager",
                    "body" => $task->name. " is going to due at ". $task->due_date,  
                ]
            ];
            $dataString = json_encode($data);
            $headers = [
                'Authorization: key=' . env('FCM_SERVER_KEY'),
                'Content-Type: application/json',
            ];
          
            $ch = curl_init();
            
            curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
                     
            $response = curl_exec($ch);
        
            var_dump($response);
        }
    }
}
