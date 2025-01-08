<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';
    public $timestamps = false;

    protected $fillable = [
        'name_en', 'district_id'
    ];
    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
