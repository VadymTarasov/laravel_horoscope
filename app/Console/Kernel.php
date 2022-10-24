<?php

namespace App\Console;

use App\Models\Post;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;


class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

        $schedule->call(function (){
//            DB::table('posts')->delete(6);
            $posts = Post::all();
            $count = Post::all()->count();

            $getIdFirstPost = $posts[0]['id'];
            $setIdLastPost = $posts[0]['id'] + $count;

            DB::update('update posts set id = "'.$setIdLastPost.'" where id = "'.$getIdFirstPost.'" ');//обновит id
        }
//        )->everyMinute();
        )->cron('* * * * *');
        //php artisan schedule:work - запустит крон

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
