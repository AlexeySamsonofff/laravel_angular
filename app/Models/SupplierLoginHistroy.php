<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupplierLoginHistroy
 * 
 * @property int $history_id
 * @property string $session_id
 * @property int $supplier_id
 * @property int $supplier_sub_user_id
 * @property string $ip_address
 * @property string $remote_ip
 * @property string $user_agent
 * @property Carbon $last_activity
 *
 * @package App\Models
 */
class SupplierLoginHistroy extends Model
{
	protected $table = 'supplier_login_histroy';
	protected $primaryKey = 'history_id';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int',
		'supplier_sub_user_id' => 'int'
	];

	protected $dates = [
		'last_activity'
	];

	protected $fillable = [
		'session_id',
		'supplier_id',
		'supplier_sub_user_id',
		'ip_address',
		'remote_ip',
		'user_agent',
		'last_activity'
	];
}
