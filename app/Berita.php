<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';

    protected $fillable = [
                      'judul',
                      'sampul',
                      'caption',
                      'waktu',
                      'status',
                      'user_id',
                      'user_nama',
    ];
}
