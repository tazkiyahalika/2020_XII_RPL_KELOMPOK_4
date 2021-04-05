<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Achievement extends Model
{
    use SoftDeletes;

    protected $table = "achievement";
    protected $guarded = [];
    protected $primaryKey = "ach_id";
    protected $fillable = ['ach_id','ach_esc_id','ach_event','ach_date_event','ach_champion'];
    protected $dates = ['deleted_at'];
}
