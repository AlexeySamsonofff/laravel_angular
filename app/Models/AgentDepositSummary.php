<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AgentDepositSummary
 * 
 * @property int $deposit_id
 * @property int $agent_id
 * @property string $agent_no
 * @property string $transaction_summary
 * @property float $deposit_amount
 * @property float $withdraw_amount
 * @property string $transaction_id
 * @property string $bank
 * @property string $branch
 * @property string $city
 * @property Carbon $value_date
 * @property Carbon $transaction_datetime
 * @property string $status
 * @property string $remarks
 *
 * @package App\Models
 */
class AgentDepositSummary extends Model
{
	protected $table = 'agent_deposit_summary';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'deposit_id' => 'int',
		'agent_id' => 'int',
		'deposit_amount' => 'float',
		'withdraw_amount' => 'float'
	];

	protected $dates = [
		'value_date',
		'transaction_datetime'
	];

	protected $fillable = [
		'deposit_id',
		'agent_id',
		'agent_no',
		'transaction_summary',
		'deposit_amount',
		'withdraw_amount',
		'transaction_id',
		'bank',
		'branch',
		'city',
		'value_date',
		'transaction_datetime',
		'status',
		'remarks'
	];
}
