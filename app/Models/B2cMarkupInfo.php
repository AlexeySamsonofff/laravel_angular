<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class B2cMarkupInfo
 * 
 * @property int $id
 * @property int $service_type
 * @property string $markup_type
 * @property string $api_name
 * @property string $country
 * @property float $markup
 * @property int $status
 * @property string $markup_process
 * @property string $currency
 * @property string $city
 * @property string $hotel
 * @property string $airline
 * @property string $process
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class B2cMarkupInfo extends Model
{
	protected $table = 'b2c_markup_info';

	protected $casts = [
		'service_type' => 'int',
		'markup' => 'float',
		'status' => 'int'
	];

	protected $fillable = [
		'service_type',
		'markup_type',
		'api_name',
		'country',
		'markup',
		'status',
		'markup_process',
		'currency',
		'city',
		'hotel',
		'airline',
		'process'
	];
}
