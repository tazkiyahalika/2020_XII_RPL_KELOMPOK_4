<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InformationExtracurriculars extends Model
{
	use SoftDeletes;

    protected $table = "information_extracurriculars";
    protected $guarded = [];
    protected $primaryKey = "info_id";
    protected $fillable = ['info_esc_id','info_usr_id','information','info_date','info_img'];
    protected $dates = ['deleted_at'];
}
