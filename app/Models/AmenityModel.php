<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AmenityModel
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $price
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityModel whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityModel wherePrice($value)
 * @mixin \Eloquent
 */
class AmenityModel extends Model
{
    use HasFactory;

    protected $table = 'amenity';
    public $timestamps = false;

    protected $fillable = [
		'name_en', 'description_en', 'price'
	];
}
