<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupHotelCancellationRate
 * 
 * @property int $id
 * @property int $supplier_id
 * @property int $sup_hotel_id
 * @property string $hotel_code
 * @property int $cancellation_id
 * @property int $days_before_checkin
 * @property int $per_rate_charge
 * @property Carbon $date_time
 *
 * @package App\Models
 */
class SupHotelCancellationRate extends Model
{
	protected $table = 'sup_hotel_cancellation_rates';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int',
		'sup_hotel_id' => 'int',
		'cancellation_id' => 'int',
		'days_before_checkin' => 'int',
		'per_rate_charge' => 'int'
	];

	protected $dates = [
		'date_time'
	];

	protected $fillable = [
		'supplier_id',
		'sup_hotel_id',
		'hotel_code',
		'cancellation_id',
		'days_before_checkin',
		'per_rate_charge',
		'date_time'
	];
}
