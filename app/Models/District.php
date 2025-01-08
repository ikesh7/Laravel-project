<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name_en', 'province_id', 'is_active'
    ];
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
