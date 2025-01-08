<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SearchResultModel
 *
 * @property int $id
 * @property string $city
 * @property string $date_of_arrival
 * @property string $date_of_departure
 * @property int $pax
 * @property int|null $capacity_adult
 * @property int|null $capacity_child
 * @property string $nationality
 * @property string $description_en
 * @method static \Illuminate\Database\Eloquent\Builder|SearchResultModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SearchResultModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SearchResultModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|SearchResultModel whereCapacityAdult($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SearchResultModel whereCapacityChild($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SearchResultModel whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SearchResultModel whereDateOfArrival($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SearchResultModel whereDateOfDeparture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SearchResultModel whereDescriptionEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SearchResultModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SearchResultModel whereNationality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SearchResultModel wherePax($value)
 * @mixin \Eloquent
 */
class SearchResultModel extends Model
{
    use HasFactory;

    protected $table = 'search_results';
    public $timestamps = false;

    protected $fillable = [
		'city', 'date_of_arrival', 'date_of_departure', 'capacity_adult', 'capacity_child'
	];

}
