<?php

use Paanblogger\LaravelAttendance\AttendanceLogger;
use Paanblogger\LaravelAttendance\Models\Attendance;

if(!function_exists('attendance'))
{
    function attendance()
    {
        $model = new Attendance();
        $logger = new AttendanceLogger($model);
        return $logger;
    }
}