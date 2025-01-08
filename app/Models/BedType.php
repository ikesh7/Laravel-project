<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BedType extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name_en', 'description_en',
    ];
    public function room()
    {
        return $this->hasMany(Room::class);
    }
}
