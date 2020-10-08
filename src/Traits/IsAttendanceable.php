<?php
namespace Paanblogger\LaravelAttendance\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;

trait IsAttendanceable
{
    public function attender(): MorphMany
    {
        return $this->morphMany(\App\Models\Attendance::class, 'attendanceable');
    }
}
