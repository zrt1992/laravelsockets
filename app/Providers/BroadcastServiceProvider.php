<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Log;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       // Broadcast::routes(['middleware' => 'auth:api']);
//        Log::info('this is broadcast middleware');
        Broadcast::routes();
        require base_path('routes/channels.php');
    }
}
