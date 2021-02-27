<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterExtracurricular extends Model
{
    protected $table = "register_extracurricular";
    protected $guarded = [];
    protected $primaryKey = "id_regis_esc";
    protected $fillable = ['regis_id','regis_esc_id','regis_std_usr_id','regis_status'];
}
