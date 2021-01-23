<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    //
    protected $table='tasks';

    public $timestamps=false;

    protected $fillable=[
        'id',
        'head',
        'text',
        'done',
        'visible'
    ];

}
