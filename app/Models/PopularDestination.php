<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PopularDestination
 * 
 * @property int $id
 * @property string $topic
 * @property string $title
 * @property string $description
 * @property string $banner_path
 * @property string $city_name
 * @property string $city_code
 * @property string $city_country
 * @property bool $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class PopularDestination extends Model
{
	protected $table = 'popular_destination';

	protected $casts = [
		'status' => 'bool'
	];

	protected $fillable = [
		'topic',
		'title',
		'description',
		'banner_path',
		'city_name',
		'city_code',
		'city_country',
		'status'
	];
}
