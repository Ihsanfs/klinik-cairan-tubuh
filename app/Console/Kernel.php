<?php

namespace App\Console;

use App\Jobs\Kirimemailjob;
use App\Models\Cairan;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {

        // Kirim email pada jam 08:00 pagi
    // $schedule->job(new Kirimemailjob())->dailyAt('08:00');

    // // Kirim email pada jam 14:00 siang
    // $schedule->job(new Kirimemailjob())->dailyAt('14:00');

    // // Kirim email pada jam 20:00 malam
    // $schedule->job(new Kirimemailjob())->dailyAt('20:00');

    $schedule->job(new Kirimemailjob())->everyMinute();

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
