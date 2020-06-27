<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GlbHotelBusinessType
 * 
 * @property int $id
 * @property string $business_type
 * @property Carbon $date_time
 *
 * @package App\Models
 */
class GlbHotelBusinessType extends Model
{
	protected $table = 'glb_hotel_business_type';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $dates = [
		'date_time'
	];

	protected $fillable = [
		'business_type',
		'date_time'
	];
}
