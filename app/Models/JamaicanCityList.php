<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class JamaicanCityList
 * 
 * @property int $id
 * @property string $city_name
 * @property string $region_name
 * @property string $country_name
 * @property string $latitude
 * @property string $longitude
 * @property bool $status
 * @property Carbon $created_at
 *
 * @package App\Models
 */
class JamaicanCityList extends Model
{
	protected $table = 'jamaican_city_list';
	public $timestamps = false;

	protected $casts = [
		'status' => 'bool'
	];

	protected $fillable = [
		'city_name',
		'region_name',
		'country_name',
		'latitude',
		'longitude',
		'status'
	];
}
