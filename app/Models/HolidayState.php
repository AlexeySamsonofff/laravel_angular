<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HolidayState
 * 
 * @property int $state_id
 * @property string $state_name
 * @property int $country_id
 *
 * @package App\Models
 */
class HolidayState extends Model
{
	protected $table = 'holiday_state';
	protected $primaryKey = 'state_id';
	public $timestamps = false;

	protected $casts = [
		'country_id' => 'int'
	];

	protected $fillable = [
		'state_name',
		'country_id'
	];
}
