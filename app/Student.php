<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $primaryKey = 'std_id';
    protected $guarded=[];
    protected $dates = ['deleted_at'];

}
