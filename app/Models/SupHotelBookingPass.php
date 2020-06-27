<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SupHotelBookingPass
 * 
 * @property int $pass_id
 * @property string $booking_id
 * @property string $uniqueRefNo
 * @property string $pass_type
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
class SupHotelBookingPass extends Model
{
	protected $table = 'sup_hotel_booking_pass';
	protected $primaryKey = 'pass_id';
	public $timestamps = false;

	protected $fillable = [
		'booking_id',
		'uniqueRefNo',
		'pass_type',
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
