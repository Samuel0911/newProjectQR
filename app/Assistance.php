<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{
    protected $table = "assistances";
    protected $fillable = ['check_in', 'check_out', 'date', 'work_hour', 'user_id'];

    public function user()
	{
		return $this->belongsTo('App\User');
	}
}

