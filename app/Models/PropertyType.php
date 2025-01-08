<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    use HasFactory;
    protected $table = 'property_types';
    public $timestamps = false;

    protected $fillable = [
        'name', 'is_active'
    ];
    public function hotel()
    {
        return $this->hasMany(Hotel::class);
    }
}
