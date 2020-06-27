<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HolidayBookingReport
 * 
 * @property int $holiday_booking_id
 * @property int $user_id
 * @property string $user_no
 * @property int $agent_id
 * @property int $supplier_id
 * @property string $uniqueRefNo
 * @property string $user_email
 * @property string $title
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $user_mobile
 * @property string $address
 * @property string $user_city
 * @property string $user_state
 * @property string $user_country
 * @property string $user_comment
 * @property string $user_pincode
 * @property int $adults_no
 * @property int $childs_no
 * @property int $infants_no
 * @property int $seniors_no
 * @property string $holiday_id
 * @property string $package_title
 * @property string $package_code
 * @property string $holiday_duration
 * @property string $month_duration
 * @property string $arrival_date
 * @property string $depart_date
 * @property string $accommodation_type
 * @property int $single_room_no
 * @property int $twin_room_no
 * @property int $triple_room_no
 * @property int $room_count
 * @property string $room_details
 * @property Carbon $booking_datetime
 * @property Carbon $Booking_Date
 * @property float $total_cost
 * @property string $Currency
 * @property float $package_cost
 * @property float $discount_amount
 * @property string $promo_code
 * @property string $booking_type
 * @property string $booking_status
 * @property int $assignto
 * @property string $accounting_response
 *
 * @package App\Models
 */
class HolidayBookingReport extends Model
{
	protected $table = 'holiday_booking_reports';
	protected $primaryKey = 'holiday_booking_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'agent_id' => 'int',
		'supplier_id' => 'int',
		'adults_no' => 'int',
		'childs_no' => 'int',
		'infants_no' => 'int',
		'seniors_no' => 'int',
		'single_room_no' => 'int',
		'twin_room_no' => 'int',
		'triple_room_no' => 'int',
		'room_count' => 'int',
		'total_cost' => 'float',
		'package_cost' => 'float',
		'discount_amount' => 'float',
		'assignto' => 'int'
	];

	protected $dates = [
		'booking_datetime',
		'Booking_Date'
	];

	protected $fillable = [
		'user_id',
		'user_no',
		'agent_id',
		'supplier_id',
		'uniqueRefNo',
		'user_email',
		'title',
		'first_name',
		'middle_name',
		'last_name',
		'user_mobile',
		'address',
		'user_city',
		'user_state',
		'user_country',
		'user_comment',
		'user_pincode',
		'adults_no',
		'childs_no',
		'infants_no',
		'seniors_no',
		'holiday_id',
		'package_title',
		'package_code',
		'holiday_duration',
		'month_duration',
		'arrival_date',
		'depart_date',
		'accommodation_type',
		'single_room_no',
		'twin_room_no',
		'triple_room_no',
		'room_count',
		'room_details',
		'booking_datetime',
		'Booking_Date',
		'total_cost',
		'Currency',
		'package_cost',
		'discount_amount',
		'promo_code',
		'booking_type',
		'booking_status',
		'assignto',
		'accounting_response'
	];
}
