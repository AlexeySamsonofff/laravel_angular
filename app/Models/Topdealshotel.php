<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Topdealshotel
 * 
 * @property int $id
 * @property string $hotel_name
 * @property string $hotel_code
 * @property string $api
 * @property string $city_code
 * @property string $topdealscode
 * @property string $city_name
 * @property string $country
 * @property string $star
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Topdealshotel extends Model
{
	protected $table = 'topdealshotel';

	protected $fillable = [
		'hotel_name',
		'hotel_code',
		'api',
		'city_code',
		'topdealscode',
		'city_name',
		'country',
		'star',
		'status'
	];
}
