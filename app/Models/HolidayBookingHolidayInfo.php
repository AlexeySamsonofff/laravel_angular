<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HolidayBookingHolidayInfo
 * 
 * @property int $holiday_info_id
 * @property string $uniqueRefNo
 * @property string $user_email
 * @property string $title
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $user_mobile
 * @property string $package_title
 * @property string $package_code
 * @property string $holiday_duration
 * @property Carbon $booking_datetime
 * @property string $booking_status
 * @property string $operated_by
 * @property string $operator_no
 * @property string $emergency_no
 * @property string $cancellation_policy
 *
 * @package App\Models
 */
class HolidayBookingHolidayInfo extends Model
{
	protected $table = 'holiday_booking_holiday_info';
	protected $primaryKey = 'holiday_info_id';
	public $timestamps = false;

	protected $dates = [
		'booking_datetime'
	];

	protected $fillable = [
		'uniqueRefNo',
		'user_email',
		'title',
		'first_name',
		'middle_name',
		'last_name',
		'user_mobile',
		'package_title',
		'package_code',
		'holiday_duration',
		'booking_datetime',
		'booking_status',
		'operated_by',
		'operator_no',
		'emergency_no',
		'cancellation_policy'
	];
}
