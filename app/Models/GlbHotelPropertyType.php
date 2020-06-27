<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GlbHotelPropertyType
 * 
 * @property int $id
 * @property string $property_type
 * @property Carbon $date_time
 * @property string $status
 *
 * @package App\Models
 */
class GlbHotelPropertyType extends Model
{
	protected $table = 'glb_hotel_property_type';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $dates = [
		'date_time'
	];

	protected $fillable = [
		'property_type',
		'date_time',
		'status'
	];
}
