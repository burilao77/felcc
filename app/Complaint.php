<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    //
        protected $fillable = [
        'title', 'description', 'categories','nameDenouncer', 'ageDenouncer','dniDenouncer', 'genderDenouncer', 'phoneDenouncer', 'addressDenouncer', 'nameDenounced', 'genderDenounced', 'phoneDenounced', 'addressDenounced',
    ];

}
