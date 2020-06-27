<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupVillaCancellationRate
 * 
 * @property int $id
 * @property int $sup_villa_rates_list_id
 * @property int $supplier_id
 * @property int $sup_villa_id
 * @property string $villa_code
 * @property int $days_before_checkin
 * @property int $per_rate_charge
 * @property string $cancel_rates_type
 * @property Carbon $villa_avail_date
 * @property Carbon $date_time
 *
 * @package App\Models
 */
class SupVillaCancellationRate extends Model
{
	protected $table = 'sup_villa_cancellation_rates';
	public $timestamps = false;

	protected $casts = [
		'sup_villa_rates_list_id' => 'int',
		'supplier_id' => 'int',
		'sup_villa_id' => 'int',
		'days_before_checkin' => 'int',
		'per_rate_charge' => 'int'
	];

	protected $dates = [
		'villa_avail_date',
		'date_time'
	];

	protected $fillable = [
		'sup_villa_rates_list_id',
		'supplier_id',
		'sup_villa_id',
		'villa_code',
		'days_before_checkin',
		'per_rate_charge',
		'cancel_rates_type',
		'villa_avail_date',
		'date_time'
	];
}
