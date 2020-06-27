<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupHotelBooking
 * 
 * @property int $hotel_booking_id
 * @property int $booking_id
 * @property int $supplier_id
 * @property string $AL_RefNo
 * @property string $uniqueRefNo
 * @property string $hotel_code
 * @property string $hotel_name
 * @property Carbon $check_in
 * @property Carbon $check_out
 * @property Carbon $booking_date
 * @property string $city
 * @property int $room_count
 * @property string $adult
 * @property string $child
 * @property float $total_amount
 * @property float $net_amount
 * @property float $discount
 * @property float $tax
 * @property float $government_tax
 * @property float $resort_fee
 * @property float $service_tax
 * @property int $paid_status
 * @property string $remarks
 * @property string $comment_desc
 * @property int $user_id
 * @property Carbon $date_time
 *
 * @package App\Models
 */
class SupHotelBooking extends Model
{
	protected $table = 'sup_hotel_booking';
	protected $primaryKey = 'hotel_booking_id';
	public $timestamps = false;

	protected $casts = [
		'booking_id' => 'int',
		'supplier_id' => 'int',
		'room_count' => 'int',
		'total_amount' => 'float',
		'net_amount' => 'float',
		'discount' => 'float',
		'tax' => 'float',
		'government_tax' => 'float',
		'resort_fee' => 'float',
		'service_tax' => 'float',
		'paid_status' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'check_in',
		'check_out',
		'booking_date',
		'date_time'
	];

	protected $fillable = [
		'booking_id',
		'supplier_id',
		'AL_RefNo',
		'uniqueRefNo',
		'hotel_code',
		'hotel_name',
		'check_in',
		'check_out',
		'booking_date',
		'city',
		'room_count',
		'adult',
		'child',
		'total_amount',
		'net_amount',
		'discount',
		'tax',
		'government_tax',
		'resort_fee',
		'service_tax',
		'paid_status',
		'remarks',
		'comment_desc',
		'user_id',
		'date_time'
	];
}
