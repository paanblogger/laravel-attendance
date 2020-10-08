<?php
namespace Paanblogger\LaravelAttendance;

use Illuminate\Support\ServiceProvider;

class LaravelAttendanceServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-attendance.php', 'laravel-attendance');
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            // publish config file
            // register artisan command
            if (!class_exists('CreateAttendancesTable')) {
                $this->publishes(
                    [
                        __DIR__ . '/../database/migrations/create_attendances_table.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_attendances_table.php'),
                    ], 'migrations');
            }
            $this->publishes([
                __DIR__ . '/../config/laravel-attendance.php' => config_path('laravel-attendance.php'),
            ], 'config');
        }
    }
}
