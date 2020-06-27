<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelBookingHotelsInfo
 * 
 * @property int $hotel_booking_id
 * @property int $user_id
 * @property string $user_no
 * @property int $agent_id
 * @property string $uniqueRefNo
 * @property string $hotel_code
 * @property string $hotel_name
 * @property string $city_code
 * @property Carbon $check_in
 * @property Carbon $check_out
 * @property Carbon $voucher_date
 * @property string $city
 * @property string $room_type
 * @property int $star
 * @property string $address
 * @property int $room_count
 * @property string $cancellation_policy
 * @property string $adult
 * @property string $child
 * @property string $infant
 * @property string $childage
 * @property string $description
 * @property string $phone
 * @property string $fax
 * @property string $image
 * @property string $nights
 * @property string $api
 * @property string $remarks
 * @property string $comment_desc
 * @property string $inclusion
 * @property string $room_code
 * @property string $fitruums_notes
 * @property string $latitude
 * @property string $longitude
 * @property string $room_format
 * @property string $hp_additional_info
 *
 * @package App\Models
 */
class HotelBookingHotelsInfo extends Model
{
	protected $table = 'hotel_booking_hotels_info';
	protected $primaryKey = 'hotel_booking_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'agent_id' => 'int',
		'star' => 'int',
		'room_count' => 'int'
	];

	protected $dates = [
		'check_in',
		'check_out',
		'voucher_date'
	];

	protected $fillable = [
		'user_id',
		'user_no',
		'agent_id',
		'uniqueRefNo',
		'hotel_code',
		'hotel_name',
		'city_code',
		'check_in',
		'check_out',
		'voucher_date',
		'city',
		'room_type',
		'star',
		'address',
		'room_count',
		'cancellation_policy',
		'adult',
		'child',
		'infant',
		'childage',
		'description',
		'phone',
		'fax',
		'image',
		'nights',
		'api',
		'remarks',
		'comment_desc',
		'inclusion',
		'room_code',
		'fitruums_notes',
		'latitude',
		'longitude',
		'room_format',
		'hp_additional_info'
	];
}
