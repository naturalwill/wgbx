<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bxinfo extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'stunum', 'stuname', 'phone', 'phone2', 'sushe', 'fangjian', 'port', 'info',
    ];

}
