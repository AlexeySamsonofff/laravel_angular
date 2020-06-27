<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MeetingPoint
 * 
 * @property int $id
 * @property int $holiday_id
 * @property string $pickup_type
 * @property string $pickup_time
 * @property string $pickup_location
 * @property string $latitude
 * @property string $longitude
 *
 * @package App\Models
 */
class MeetingPoint extends Model
{
	protected $table = 'meeting_points';
	public $timestamps = false;

	protected $casts = [
		'holiday_id' => 'int'
	];

	protected $fillable = [
		'holiday_id',
		'pickup_type',
		'pickup_time',
		'pickup_location',
		'latitude',
		'longitude'
	];
}
