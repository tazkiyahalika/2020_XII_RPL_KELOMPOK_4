<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
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

