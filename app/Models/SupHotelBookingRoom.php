<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupHotelBookingRoom
 * 
 * @property int $hotel_room_booking_id
 * @property int $booking_id
 * @property string $hotel_code
 * @property string $room_code
 * @property Carbon $check_in
 * @property Carbon $check_out
 * @property string $room_type
 * @property string $adult
 * @property string $child
 * @property float $room_price
 * @property string $hotel_crs_booking_code
 * @property Carbon $date_time
 *
 * @package App\Models
 */
class SupHotelBookingRoom extends Model
{
	protected $table = 'sup_hotel_booking_room';
	protected $primaryKey = 'hotel_room_booking_id';
	public $timestamps = false;

	protected $casts = [
		'booking_id' => 'int',
		'room_price' => 'float'
	];

	protected $dates = [
		'check_in',
		'check_out',
		'date_time'
	];

	protected $fillable = [
		'booking_id',
		'hotel_code',
		'room_code',
		'check_in',
		'check_out',
		'room_type',
		'adult',
		'child',
		'room_price',
		'hotel_crs_booking_code',
		'date_time'
	];
}
