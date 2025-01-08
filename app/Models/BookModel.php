<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BookModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|BookModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookModel query()
 * @mixin \Eloquent
 */
class BookModel extends Model
{
    use HasFactory;

    protected $table = 'booking';
    public $timestamps = false;

    protected $fillable = [
		'booking_type', 'booking_code', 'user_id', 'ipaddress', 'agentId'
	];


}

class BookDetailsModel extends Model
{
    use HasFactory;

    protected $table = 'booking_details';
    public $timestamps = false;

    protected $fillable = [
		'booking_id', 'room_id', 'price', 'no_of_guest_adult', 'no_of_guest_children', 'agentId', 'first_name', 'last_name', 'gender', 'check_in', 'check_out'
	];


}

class BookEventModel extends Model
{
    use HasFactory;

    protected $table = 'booking_events';
    public $timestamps = false;

    protected $fillable = [
		'booking_id', 'status'
	];


}
