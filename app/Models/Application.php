<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table='users_profile';
	protected $primaryKey='user_id';
	
	public function investors()
	{
		return $this->hasMany('App\Models\Investor','user_id');
	}
	
}
