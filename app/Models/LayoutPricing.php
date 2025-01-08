<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\LayoutPricing
 *
 * @method static \Illuminate\Database\Eloquent\Builder|LayoutPricing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LayoutPricing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LayoutPricing query()
 * @mixin \Eloquent
 */
class LayoutPricing extends Model
{
    use HasFactory;

    protected $table = 'layout_pricing';
    public $timestamps = false;

    protected $fillable = [
		'room_type', 'room_name', 'custom_name','room_capacity','price', 'no_of_room', 'others', 'userid',
	];
}
