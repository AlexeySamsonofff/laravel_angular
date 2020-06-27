<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupHotelBookingRoomDetail
 * 
 * @property int $hotel_room_booking_id
 * @property int $booking_id
 * @property string $uniqueRefNo
 * @property string $mobile
 * @property string $email
 * @property int $supplier_id
 * @property string $hotel_code
 * @property string $room_code
 * @property int $contract_id
 * @property string $market
 * @property string $meal_plan
 * @property string $rate_plan_code
 * @property string $rate_type
 * @property Carbon $check_in
 * @property Carbon $check_out
 * @property string $room_type
 * @property int $room_no
 * @property int $nights
 * @property string $adult
 * @property string $child
 * @property string $childs_ages
 * @property float $room_price
 * @property float $net_fare
 * @property float $discount
 * @property string $hotel_crs_booking_code
 * @property array $hotel_crs_cancellation_json
 * @property Carbon $date_time
 *
 * @package App\Models
 */
class SupHotelBookingRoomDetail extends Model
{
	protected $table = 'sup_hotel_booking_room_details';
	protected $primaryKey = 'hotel_room_booking_id';
	public $timestamps = false;

	protected $casts = [
		'booking_id' => 'int',
		'supplier_id' => 'int',
		'contract_id' => 'int',
		'room_no' => 'int',
		'nights' => 'int',
		'room_price' => 'float',
		'net_fare' => 'float',
		'discount' => 'float',
		'hotel_crs_cancellation_json' => 'json'
	];

	protected $dates = [
		'check_in',
		'check_out',
		'date_time'
	];

	protected $fillable = [
		'booking_id',
		'uniqueRefNo',
		'mobile',
		'email',
		'supplier_id',
		'hotel_code',
		'room_code',
		'contract_id',
		'market',
		'meal_plan',
		'rate_plan_code',
		'rate_type',
		'check_in',
		'check_out',
		'room_type',
		'room_no',
		'nights',
		'adult',
		'child',
		'childs_ages',
		'room_price',
		'net_fare',
		'discount',
		'hotel_crs_booking_code',
		'hotel_crs_cancellation_json',
		'date_time'
	];
}
