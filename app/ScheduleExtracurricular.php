<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScheduleExtracurricular extends Model
{
    use SoftDeletes;

    protected $table = "schedule_extracurricular";
    protected $guarded = [];
    protected $primaryKey = "schedule_id";
    protected $fillable = ['schedule_id','schedule_esc_id','schedule_day','schedule_time_start','schedule_time_end'];
    protected $dates = ['deleted_at'];
}
