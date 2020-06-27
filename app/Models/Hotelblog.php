<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Hotelblog
 * 
 * @property int $id
 * @property string $hotel_name
 * @property string $hotel_code
 * @property string $api
 * @property string $city_code
 * @property string $city_name
 * @property string $country
 * @property string $blogdetails
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Hotelblog extends Model
{
	protected $table = 'hotelblog';

	protected $fillable = [
		'hotel_name',
		'hotel_code',
		'api',
		'city_code',
		'city_name',
		'country',
		'blogdetails',
		'status'
	];
}
