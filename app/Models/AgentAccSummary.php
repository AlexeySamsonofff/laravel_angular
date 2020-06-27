<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AgentAccSummary
 * 
 * @property int $acc_id
 * @property int $agent_id
 * @property string $agent_no
 * @property string $agent_transaction_id
 * @property string $transaction_summary
 * @property float $deposit_amount
 * @property float $withdraw_amount
 * @property string $transaction_id
 * @property string $bank
 * @property string $branch
 * @property string $city
 * @property Carbon $value_date
 * @property Carbon $transaction_datetime
 * @property float $available_balance
 * @property string $remarks
 * @property Carbon $approve_date
 * @property string $status
 * @property string $trans_type
 * @property string $agent_parent
 *
 * @package App\Models
 */
class AgentAccSummary extends Model
{
	protected $table = 'agent_acc_summary';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'acc_id' => 'int',
		'agent_id' => 'int',
		'deposit_amount' => 'float',
		'withdraw_amount' => 'float',
		'available_balance' => 'float'
	];

	protected $dates = [
		'value_date',
		'transaction_datetime',
		'approve_date'
	];

	protected $fillable = [
		'acc_id',
		'agent_id',
		'agent_no',
		'agent_transaction_id',
		'transaction_summary',
		'deposit_amount',
		'withdraw_amount',
		'transaction_id',
		'bank',
		'branch',
		'city',
		'value_date',
		'transaction_datetime',
		'available_balance',
		'remarks',
		'approve_date',
		'status',
		'trans_type',
		'agent_parent'
	];
}
