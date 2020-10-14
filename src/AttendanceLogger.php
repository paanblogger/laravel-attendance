<?php
namespace Paanblogger\LaravelAttendance;

use Illuminate\Database\Eloquent\Model;
use Paanblogger\LaravelAttendance\Models\Attendance;

class AttendanceLogger
{
    protected $attendance;

    public function __construct(Attendance $attendance)
    {
        $this->attendance = $attendance;
    }

    public function attend(Model $model)
    {
        $this->attendance->attendanceable()->associate($model);
        return $this;
    }

    public function attender(Model $model)
    {
        $this->attendance->attender()->associate($model);
        return $this;
    }

    public function logger(Model $model)
    {
        $this->attendance->logger()->associate($model);
        return $this;
    }

    public function date($date)
    {
        $this->attendance->date = $date;
        return $this;
    }

    public function timestamp($timestamp)
    {
        $this->attendance->timestamp = $timestamp;
        return $this;
    }

    public function metadata($metadata)
    {
        $this->attendance->metadata = $metadata;
        return $this;
    }

    public function save()
    {
        $this->attendance->save();
        return $this->attendance;
    }
}
