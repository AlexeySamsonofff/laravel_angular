<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserInfo
 * 
 * @property int $id
 * @property string $user_email
 * @property string $user_password
 * @property string $user_no
 * @property string $title
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property int $mobile_no
 * @property string $billing_no
 * @property string $address
 * @property int $pin_code
 * @property string $city
 * @property string $state
 * @property string $country
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property int $status
 * @property string $gender
 * @property string $DOB
 * @property string $activation_key
 * @property string $profilepicture
 * @property string $recaptcharesponse
 * @property string $zohoId
 * @property string $zohoInsertResJson
 * @property string $zohoUpdateResJson
 *
 * @package App\Models
 */
class UserInfo extends Model
{
	protected $table = 'user_info';

	protected $casts = [
		'mobile_no' => 'int',
		'pin_code' => 'int',
		'status' => 'int'
	];

	protected $hidden = [
		'user_password'
	];

	protected $fillable = [
		'user_email',
		'user_password',
		'user_no',
		'title',
		'first_name',
		'middle_name',
		'last_name',
		'mobile_no',
		'billing_no',
		'address',
		'pin_code',
		'city',
		'state',
		'country',
		'status',
		'gender',
		'DOB',
		'activation_key',
		'profilepicture',
		'recaptcharesponse',
		'zohoId',
		'zohoInsertResJson',
		'zohoUpdateResJson'
	];
}
