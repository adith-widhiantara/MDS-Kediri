<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $table = 'santri';

    protected $fillable = [
                      'judul',
                      'sampul',
                      'caption',
                      'waktu',
                      'bulan',
                      'status',
                      'user_id',
                      'user_nama',
    ];
}
