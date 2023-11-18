<?php

namespace App\Console\Commands;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Console\Command;

class ScheduleRemind extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:schedule-remind';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Schedul to push notification at setted remind time';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tasks_need_reminds = Todo::where('status', '=', 0)->whereBetween('remind', [now()->startOfMinute(), now()->endOfMinute()])->with('steps')->get();
        foreach($tasks_need_reminds as $task)
        {
            $userDeviceToken = User::find($task->user_id)->device_token;
            $data = [
                "registration_ids" => array($userDeviceToken),
                "notification" => [
                    "title" => "Remind from Task Manager",
                    "body" => "You have to do " . $task->name . ". Please check it out! \n",  
                ]
            ];
            if (count($task->steps) > 0) {
                $data['notification']['body'] .= "Follow these steps: \n";
                foreach($task->steps as $step) {
                    if ($step->status == 0) {
                        $data['notification']['body'] .= $step->content.PHP_EOL;
                    }
                }
            }
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
