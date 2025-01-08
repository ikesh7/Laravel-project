<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Facility extends Model
{
  use HasFactory;


  

  protected $fillable = [

    'name',
    'slug',
    'is_active',

  ];
  public function hotel()
  {
    return $this->belongsToMany(Hotel::class);
  }
}
