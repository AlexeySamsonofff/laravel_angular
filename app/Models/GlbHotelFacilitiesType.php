<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GlbHotelFacilitiesType
 * 
 * @property int $id
 * @property int $supplier_id
 * @property string $facility
 * @property string $facility_type
 * @property Carbon $date_time
 * @property string $status
 * @property bool $is_edit
 *
 * @package App\Models
 */
class GlbHotelFacilitiesType extends Model
{
	protected $table = 'glb_hotel_facilities_type';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int',
		'is_edit' => 'bool'
	];

	protected $dates = [
		'date_time'
	];

	protected $fillable = [
		'supplier_id',
		'facility',
		'facility_type',
		'date_time',
		'status',
		'is_edit'
	];
}
