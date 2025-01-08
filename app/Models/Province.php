<?php

namespace App\Models;

use District;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name_en', 'country_id', 'is_active'
    ];
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
