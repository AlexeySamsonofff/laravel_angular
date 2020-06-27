<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CancelPolicy
 * 
 * @property int $id
 * @property string $policy_name
 * @property string $policy_desc
 * @property bool $status
 * @property int $supplier_id
 * @property Carbon $created_at
 *
 * @package App\Models
 */
class CancelPolicy extends Model
{
	protected $table = 'cancel_policy';
	public $timestamps = false;

	protected $casts = [
		'status' => 'bool',
		'supplier_id' => 'int'
	];

	protected $fillable = [
		'policy_name',
		'policy_desc',
		'status',
		'supplier_id'
	];
}
