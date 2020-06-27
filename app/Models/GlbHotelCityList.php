<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GlbHotelCityList
 * 
 * @property int $id
 * @property string $city_name
 * @property string $country_name
 * @property Carbon $date_time
 * @property int $status
 *
 * @package App\Models
 */
class GlbHotelCityList extends Model
{
	protected $table = 'glb_hotel_city_list';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'date_time'
	];

	protected $fillable = [
		'city_name',
		'country_name',
		'date_time',
		'status'
	];
}
