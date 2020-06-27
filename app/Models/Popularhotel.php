<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Popularhotel
 * 
 * @property int $id
 * @property string $hotel_name
 * @property string $hotel_code
 * @property string $api
 * @property string $city_code
 * @property string $city_name
 * @property string $star
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Popularhotel extends Model
{
	protected $table = 'popularhotel';

	protected $fillable = [
		'hotel_name',
		'hotel_code',
		'api',
		'city_code',
		'city_name',
		'star',
		'status'
	];
}
