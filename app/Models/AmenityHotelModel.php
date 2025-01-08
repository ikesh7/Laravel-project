<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AmenityHotelModel
 *
 * @property int $id
 * @property int $amnity_id
 * @property int $hotel_id
 * @property string $time_stamp
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityHotelModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityHotelModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityHotelModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityHotelModel whereAmnityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityHotelModel whereHotelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityHotelModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityHotelModel whereTimeStamp($value)
 * @mixin \Eloquent
 */
class AmenityHotelModel extends Model
{
    use HasFactory;

    protected $table = 'amnity_hotel';
    public $timestamps = false;

    protected $fillable = [
		'amnity_id', 'hotel_id'
	];
}
