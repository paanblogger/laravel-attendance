<?php
namespace Paanblogger\LaravelAttendance\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;

trait IsAttender
{
    public function attendanceable(): MorphMany
    {
        return $this->morphMany(\Paanblogger\LaravelAttendance\Models\Attendance::class, 'attender');
    }
}