<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HolidayCity
 * 
 * @property int $city_id
 * @property string $city_name
 * @property int $state_id
 * @property int $country_id
 * @property bool $status
 *
 * @package App\Models
 */
class HolidayCity extends Model
{
	protected $table = 'holiday_city';
	protected $primaryKey = 'city_id';
	public $timestamps = false;

	protected $casts = [
		'state_id' => 'int',
		'country_id' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'city_name',
		'state_id',
		'country_id',
		'status'
	];
}
