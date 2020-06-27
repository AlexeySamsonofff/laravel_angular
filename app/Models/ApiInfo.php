<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ApiInfo
 * 
 * @property int $id
 * @property int $service_type
 * @property string $api_name
 * @property string $client_id
 * @property string $username
 * @property string $password
 * @property string $live_url
 * @property string $demo_url
 * @property int $order_no
 * @property int $mode
 * @property int $status
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class ApiInfo extends Model
{
	protected $table = 'api_info';
	public $timestamps = false;

	protected $casts = [
		'service_type' => 'int',
		'order_no' => 'int',
		'mode' => 'int',
		'status' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'service_type',
		'api_name',
		'client_id',
		'username',
		'password',
		'live_url',
		'demo_url',
		'order_no',
		'mode',
		'status'
	];
}
