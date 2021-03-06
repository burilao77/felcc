<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    //
        protected $fillable = [
        'description', 'active', 'categories','nameDenouncer', 'ageDenouncer','dniDenouncer', 'genderDenouncer', 'phoneDenouncer', 'addressDenouncer', 'nameDenounced', 'genderDenounced', 'phoneDenounced', 'addressDenounced',
    ];

    public function setActiveAttribute($value)
    {
    	$this->attributes['active'] = ($value == 'on') ? '1' : '0';
    }

    public function scopeName($query, $name)   
    {
    	//dd("scope: " . $name);
    	if (trim($name) != "") 
    	{
    		$query->where('nameDenouncer', "LIKE",  "%$name%");
    	}
    	
    }

    public function evidences()
    {
        return $this->hasMany('App/Evidence');
    }


}
