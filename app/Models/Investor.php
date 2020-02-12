<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    protected $table="individual_master";
	protected $primaryKey="user_id";
	public function Applications()
	{
		// Defining Inverse Relationship with Application Model
		return $this->belongsTo('App\Models\Application','user_id');
	}
}
