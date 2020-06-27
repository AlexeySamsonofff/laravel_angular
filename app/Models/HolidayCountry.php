<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HolidayCountry
 * 
 * @property int $country_id
 * @property string $country_name
 * @property int $continent_id
 *
 * @package App\Models
 */
class HolidayCountry extends Model
{
	protected $table = 'holiday_country';
	protected $primaryKey = 'country_id';
	public $timestamps = false;

	protected $casts = [
		'continent_id' => 'int'
	];

	protected $fillable = [
		'country_name',
		'continent_id'
	];
}
