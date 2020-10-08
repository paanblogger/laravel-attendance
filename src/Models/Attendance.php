<?php

namespace Paanblogger\LaravelAttendance\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public function attendanceable()
    {
        return $this->morphTo();
    }

    public function attender()
    {
        return $this->morphTo();
    }

    public function logger()
    {
        return $this->morphTo();
    }
}
