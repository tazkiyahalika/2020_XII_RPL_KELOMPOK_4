<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegisterExtracurricular extends Model
{
	use SoftDeletes;

    protected $table = "register_extracurricular";
    protected $guarded = [];
    protected $primaryKey = "id_regis_esc";
    protected $fillable = ['regis_id','regis_esc_id','regis_usr_id','regis_status'];
     protected $dates = ['deleted_at'];
}
