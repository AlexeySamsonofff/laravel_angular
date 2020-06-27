<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupAccSummary
 * 
 * @property int $acc_id
 * @property string $transaction_id
 * @property int $supplier_id
 * @property string $supplier_no
 * @property string $booking_id
 * @property int $hotel_id
 * @property string $hotel_code
 * @property string $transaction_summary
 * @property float $booked_amount
 * @property float $paid_amount
 * @property float $available_balance
 * @property string $city
 * @property Carbon $booking_date
 * @property Carbon $transaction_datetime
 * @property int $user_id
 * @property string $remarks
 * @property string $property_type
 *
 * @package App\Models
 */
class SupAccSummary extends Model
{
	protected $table = 'sup_acc_summary';
	protected $primaryKey = 'acc_id';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int',
		'hotel_id' => 'int',
		'booked_amount' => 'float',
		'paid_amount' => 'float',
		'available_balance' => 'float',
		'user_id' => 'int'
	];

	protected $dates = [
		'booking_date',
		'transaction_datetime'
	];

	protected $fillable = [
		'transaction_id',
		'supplier_id',
		'supplier_no',
		'booking_id',
		'hotel_id',
		'hotel_code',
		'transaction_summary',
		'booked_amount',
		'paid_amount',
		'available_balance',
		'city',
		'booking_date',
		'transaction_datetime',
		'user_id',
		'remarks',
		'property_type'
	];
}
