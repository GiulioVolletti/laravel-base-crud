<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
  protected $fillable = [
    'nome_birra',
    'marca',
    'prezzo',
    'gradazione_alcolica',
  ]
}
