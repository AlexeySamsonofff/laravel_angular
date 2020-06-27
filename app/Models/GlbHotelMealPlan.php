<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GlbHotelMealPlan
 * 
 * @property int $id
 * @property int $supplier_id
 * @property string $meal_plan
 * @property string $description
 * @property Carbon $date_time
 * @property string $status
 * @property bool $is_edit
 *
 * @package App\Models
 */
class GlbHotelMealPlan extends Model
{
	protected $table = 'glb_hotel_meal_plan';
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
		'meal_plan',
		'description',
		'date_time',
		'status',
		'is_edit'
	];
}
