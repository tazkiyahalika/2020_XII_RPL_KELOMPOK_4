<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coach extends Model
{
	use SoftDeletes;

    protected $table = 'coaches';
	protected $dates = ['deleted_at'];
	protected $guarded = [];
	protected $fillable = [ 
	'coc_id',
	'coc_usr_id',
	'coc_esc_id',
	'coc_birth',
	'coc_gender',
	'coc_study',
	'coc_job',
	'coc_address'

	];
}

