<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HolidayActivity
 * 
 * @property int $id
 * @property string $activity_code
 * @property int $holiday_id
 * @property string $activity_title
 * @property string $operating_hours
 * @property string $duration
 * @property string $pickup_location
 * @property string $pickup_time
 * @property string $child_allowed
 * @property int $minChildAge
 * @property int $maxChildAge
 * @property int $minAdultAge
 * @property int $minPaxOperating
 * @property int $maxPaxOperating
 * @property string $start_date
 * @property string $end_date
 * @property float $price_adt
 * @property float $price_chd
 * @property float $price_sen
 * @property string $activity_desc
 * @property string $cancel_policy
 *
 * @package App\Models
 */
class HolidayActivity extends Model
{
	protected $table = 'holiday_activity';
	public $timestamps = false;

	protected $casts = [
		'holiday_id' => 'int',
		'minChildAge' => 'int',
		'maxChildAge' => 'int',
		'minAdultAge' => 'int',
		'minPaxOperating' => 'int',
		'maxPaxOperating' => 'int',
		'price_adt' => 'float',
		'price_chd' => 'float',
		'price_sen' => 'float'
	];

	protected $fillable = [
		'activity_code',
		'holiday_id',
		'activity_title',
		'operating_hours',
		'duration',
		'pickup_location',
		'pickup_time',
		'child_allowed',
		'minChildAge',
		'maxChildAge',
		'minAdultAge',
		'minPaxOperating',
		'maxPaxOperating',
		'start_date',
		'end_date',
		'price_adt',
		'price_chd',
		'price_sen',
		'activity_desc',
		'cancel_policy'
	];
}
