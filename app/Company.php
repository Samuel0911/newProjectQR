<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = "companies";

    protected $fillable = ['name', 'phone', 'address', 'website', 'email_contact', 'city'];

    public function Users()
    {
    	return $this->hasMany('App\User');
    }
}
