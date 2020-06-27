<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PayDetail
 * 
 * @property int $payment_id
 * @property string $uniqueRefNo
 * @property string $service_type
 * @property string $status
 * @property float $amount
 * @property float $paid_amount
 * @property float $discount
 * @property string $Message
 * @property string $RespondType
 * @property string $IP
 * @property string $PaymentType
 * @property string $RespondCode
 * @property string $Auth
 * @property string $passenger_name
 * @property string $passenger_mobile
 * @property string $passenger_email
 * @property string $user_ip
 * @property string $api
 * @property string $ChargeID
 * @property string $TransactionID
 * @property string $CustomerID
 * @property string $Description
 * @property string $ResponseDescription
 * @property string $outcome
 * @property string $SourceID
 * @property string $client_secret
 * @property string $owner
 * @property string $card
 * @property Carbon $TransactionDate
 *
 * @package App\Models
 */
class PayDetail extends Model
{
	protected $table = 'pay_details';
	protected $primaryKey = 'payment_id';
	public $timestamps = false;

	protected $casts = [
		'amount' => 'float',
		'paid_amount' => 'float',
		'discount' => 'float'
	];

	protected $dates = [
		'TransactionDate'
	];

	protected $hidden = [
		'client_secret'
	];

	protected $fillable = [
		'uniqueRefNo',
		'service_type',
		'status',
		'amount',
		'paid_amount',
		'discount',
		'Message',
		'RespondType',
		'IP',
		'PaymentType',
		'RespondCode',
		'Auth',
		'passenger_name',
		'passenger_mobile',
		'passenger_email',
		'user_ip',
		'api',
		'ChargeID',
		'TransactionID',
		'CustomerID',
		'Description',
		'ResponseDescription',
		'outcome',
		'SourceID',
		'client_secret',
		'owner',
		'card',
		'TransactionDate'
	];
}
