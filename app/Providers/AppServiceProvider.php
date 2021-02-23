<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if(config('app.env') !== 'production'){
            \DB::listen(function ($query){
                \Log::info("Query Time:{$query->time}s] $query->sql");
            });
        }
    }

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->registerPolicies();

    // 管理者のみ許可
    Gate::define('admin-only', function ($user) {
        return ($user->role == 1);
    });

    // 投稿者登録済みアカウントに許可
    Gate::define('contributor-status', function ($user) {
        return ($user->role == 50);
    });
    // 一般ユーザにのみ許可
    Gate::define('general-status', function ($user) {
        return ($user->role == 100);
    });
    }
}
