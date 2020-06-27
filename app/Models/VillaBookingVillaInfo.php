<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VillaBookingVillaInfo
 * 
 * @property int $villa_booking_id
 * @property int $user_id
 * @property string $user_no
 * @property int $agent_id
 * @property string $uniqueRefNo
 * @property string $villa_code
 * @property string $villa_name
 * @property string $city_code
 * @property Carbon $check_in
 * @property Carbon $check_out
 * @property Carbon $voucher_date
 * @property string $city
 * @property int $star
 * @property string $address
 * @property string $cancellation_policy
 * @property int $bedrooms
 * @property int $bathrooms
 * @property int $guests
 * @property string $description
 * @property string $phone
 * @property string $image
 * @property int $durations
 * @property string $latitude
 * @property string $longitude
 *
 * @package App\Models
 */
class VillaBookingVillaInfo extends Model
{
	protected $table = 'villa_booking_villa_info';
	protected $primaryKey = 'villa_booking_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'agent_id' => 'int',
		'star' => 'int',
		'bedrooms' => 'int',
		'bathrooms' => 'int',
		'guests' => 'int',
		'durations' => 'int'
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
		'villa_code',
		'villa_name',
		'city_code',
		'check_in',
		'check_out',
		'voucher_date',
		'city',
		'star',
		'address',
		'cancellation_policy',
		'bedrooms',
		'bathrooms',
		'guests',
		'description',
		'phone',
		'image',
		'durations',
		'latitude',
		'longitude'
	];
}
