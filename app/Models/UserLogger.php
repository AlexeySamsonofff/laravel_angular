<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserLogger
 * 
 * @property int $id
 * @property string $unique_ref_no
 * @property string $search_criteria
 * @property string $city
 * @property string $results
 * @property string $details
 * @property string $pre_booking
 * @property string $payment_gateway
 * @property string $voucher
 * @property Carbon $search_start
 * @property Carbon $payment_start
 * @property Carbon $payment_end
 *
 * @package App\Models
 */
class UserLogger extends Model
{
	protected $table = 'user_logger';
	public $timestamps = false;

	protected $dates = [
		'search_start',
		'payment_start',
		'payment_end'
	];

	protected $fillable = [
		'unique_ref_no',
		'search_criteria',
		'city',
		'results',
		'details',
		'pre_booking',
		'payment_gateway',
		'voucher',
		'search_start',
		'payment_start',
		'payment_end'
	];
}
