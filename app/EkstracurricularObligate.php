<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class EkstracurricularObligate extends Model
{
     use SoftDeletes;

    protected $table = "extracurricular_obligate";
    protected $guarded = [];
    protected $primaryKey = "obligate_id";
    protected $fillable = ['obligate_id','obligate_esc_id'];
    protected $dates = ['deleted_at'];
}
