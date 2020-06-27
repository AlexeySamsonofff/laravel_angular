<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HolidayBlockingDate
 * 
 * @property int $id
 * @property int $holiday_id
 * @property int $activity_id
 * @property string $from_date
 * @property string $blocking_reason
 * @property int $supplier_id
 * @property bool $status
 *
 * @package App\Models
 */
class HolidayBlockingDate extends Model
{
	protected $table = 'holiday_blocking_dates';
	public $timestamps = false;

	protected $casts = [
		'holiday_id' => 'int',
		'activity_id' => 'int',
		'supplier_id' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'holiday_id',
		'activity_id',
		'from_date',
		'blocking_reason',
		'supplier_id',
		'status'
	];
}
