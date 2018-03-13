<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    protected $fillable =
    [
        'title',
        'descripcion',
    ];

    public function complaint()
    {
        return $this->belongsTo('App/Complaint');
    }
}
