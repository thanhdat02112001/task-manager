<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('app:notify-due-tasks')->hourly();
        $schedule->command('app:schedule-remind')->everyMinute()->withoutOverlapping();
        $schedule->command('app:repeat-task-daily')->daily();
        $schedule->command('app:repeat-task-weekly')->weekly();
        $schedule->command('app:repeat-task-monthly')->monthly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
