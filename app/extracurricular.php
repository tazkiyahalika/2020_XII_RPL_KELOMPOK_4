<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class extracurricular extends Model
{
	protected $guarded = [];
   protected $fillable = [
   	'esc_id', 
   	'esc_name', 
   	'esc_description',
   ];
}