<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NetworkNews extends Model
{
    //
    protected $dateFormat = 'U';
    protected $fillable = [
    'msg','playtype','subject'
    ];
}
