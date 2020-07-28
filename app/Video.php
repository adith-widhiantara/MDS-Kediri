<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
                            'linkVideo',
                            'sampul',
                            'caption',
                            'status',
                            'user_nama',
                            'user_id',
    ];
}
