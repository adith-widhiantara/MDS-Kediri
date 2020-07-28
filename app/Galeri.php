<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
  protected $table = 'galeri';

  protected $fillable = [
                          'judul',
                          'sampul',
                          'caption',
                          'waktu',
                          'status',
                          'user_id',
                          'user_nama',
                          'linkVideo',
  ];
}
