<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class extracurricular extends Model
{
	use SoftDeletes;

	protected $primaryKey = 'esc_id';
	protected $table = 'extracurriculars';
	protected $dates = ['deleted_at'];
	protected $guarded = [];
	// protected $fillable = [ 
	// 'esc_id',
 //   	'esc_name', 
 //   	'esc_description',
 //   	'esc_logo'
 //   ];
}
