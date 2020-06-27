<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelBookingPassengersInfo
 * 
 * @property int $pass_id
 * @property string $uniqueRefNo
 * @property string $passenger_type
 * @property string $title
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $gender
 * @property string $child_age
 * @property string $room_no
 * @property string $zip_code
 * @property string $city
 * @property string $state
 * @property string $mobile
 * @property string $email
 * @property string $address
 * @property string $country
 *
 * @package App\Models
 */
class HotelBookingPassengersInfo extends Model
{
	protected $table = 'hotel_booking_passengers_info';
	protected $primaryKey = 'pass_id';
	public $timestamps = false;

	protected $fillable = [
		'uniqueRefNo',
		'passenger_type',
		'title',
		'first_name',
		'middle_name',
		'last_name',
		'gender',
		'child_age',
		'room_no',
		'zip_code',
		'city',
		'state',
		'mobile',
		'email',
		'address',
		'country'
	];
}
