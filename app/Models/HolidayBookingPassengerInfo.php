<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HolidayBookingPassengerInfo
 * 
 * @property int $holi_pass_id
 * @property int $user_id
 * @property string $uniqueRefNo
 * @property string $passenger_type
 * @property string $title
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $dob
 * @property string $holiday_id
 * @property string $package_title
 * @property string $holiday_duration
 * @property string $month_duration
 * @property string $arrival_date
 * @property string $depart_date
 * @property Carbon $booking_datetime
 *
 * @package App\Models
 */
class HolidayBookingPassengerInfo extends Model
{
	protected $table = 'holiday_booking_passenger_info';
	protected $primaryKey = 'holi_pass_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $dates = [
		'booking_datetime'
	];

	protected $fillable = [
		'user_id',
		'uniqueRefNo',
		'passenger_type',
		'title',
		'first_name',
		'middle_name',
		'last_name',
		'dob',
		'holiday_id',
		'package_title',
		'holiday_duration',
		'month_duration',
		'arrival_date',
		'depart_date',
		'booking_datetime'
	];
}
