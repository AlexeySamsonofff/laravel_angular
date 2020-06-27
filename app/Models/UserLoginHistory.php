<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserLoginHistory
 * 
 * @property int $history_id
 * @property string $session_id
 * @property string $user_no
 * @property string $ip_address
 * @property string $remote_ip
 * @property Carbon $last_activity
 *
 * @package App\Models
 */
class UserLoginHistory extends Model
{
	protected $table = 'user_login_history';
	protected $primaryKey = 'history_id';
	public $timestamps = false;

	protected $dates = [
		'last_activity'
	];

	protected $fillable = [
		'session_id',
		'user_no',
		'ip_address',
		'remote_ip',
		'last_activity'
	];
}
