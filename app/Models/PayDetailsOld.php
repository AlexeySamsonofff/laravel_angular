<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PayDetailsOld
 * 
 * @property int $payment_id
 * @property string $uniqueRefNo
 * @property string $mihpayid
 * @property string $status
 * @property float $amount
 * @property float $paid_amount
 * @property float $discount
 * @property float $net_amount_debit
 * @property Carbon $addedon
 * @property string $productinfo
 * @property string $hash
 * @property string $transac_no
 * @property string $payment_source
 * @property string $PG_TYPE
 * @property string $bank_ref_num
 * @property string $bankcode
 * @property string $error
 * @property string $error_Message
 * @property string $cardnum
 * @property string $resp_code
 * @property string $transaction_id
 * @property string $passenger_name
 * @property string $passenger_mobile
 * @property string $passenger_email
 * @property string $service
 * @property string $ip
 * @property string $api
 *
 * @package App\Models
 */
class PayDetailsOld extends Model
{
	protected $table = 'pay_details_old';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'payment_id' => 'int',
		'amount' => 'float',
		'paid_amount' => 'float',
		'discount' => 'float',
		'net_amount_debit' => 'float'
	];

	protected $dates = [
		'addedon'
	];

	protected $fillable = [
		'payment_id',
		'uniqueRefNo',
		'mihpayid',
		'status',
		'amount',
		'paid_amount',
		'discount',
		'net_amount_debit',
		'addedon',
		'productinfo',
		'hash',
		'transac_no',
		'payment_source',
		'PG_TYPE',
		'bank_ref_num',
		'bankcode',
		'error',
		'error_Message',
		'cardnum',
		'resp_code',
		'transaction_id',
		'passenger_name',
		'passenger_mobile',
		'passenger_email',
		'service',
		'ip',
		'api'
	];
}
