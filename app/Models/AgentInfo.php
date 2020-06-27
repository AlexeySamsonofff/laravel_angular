<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AgentInfo
 * 
 * @property int $id
 * @property int $agent_type
 * @property string $agent_email
 * @property string $agent_password
 * @property string $agent_no
 * @property string $agency_name
 * @property string $profilepicture
 * @property string $currency_type
 * @property string $title
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property int $mobile_no
 * @property int $office_phone_no
 * @property string $fax
 * @property string $website
 * @property string $address
 * @property int $pin_code
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $status
 * @property string $gstin
 * @property string $pan_no
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class AgentInfo extends Model
{
	protected $table = 'agent_info';

	protected $casts = [
		'agent_type' => 'int',
		'mobile_no' => 'int',
		'office_phone_no' => 'int',
		'pin_code' => 'int'
	];

	protected $hidden = [
		'agent_password'
	];

	protected $fillable = [
		'agent_type',
		'agent_email',
		'agent_password',
		'agent_no',
		'agency_name',
		'profilepicture',
		'currency_type',
		'title',
		'first_name',
		'middle_name',
		'last_name',
		'mobile_no',
		'office_phone_no',
		'fax',
		'website',
		'address',
		'pin_code',
		'city',
		'state',
		'country',
		'status',
		'gstin',
		'pan_no'
	];
}
