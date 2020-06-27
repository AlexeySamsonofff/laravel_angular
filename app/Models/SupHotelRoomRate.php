<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupHotelRoomRate
 * 
 * @property int $sup_hotel_room_rates_id
 * @property int $sup_hotel_room_rates_list_id
 * @property int $supplier_id
 * @property int $sup_hotel_id
 * @property string $hotel_code
 * @property string $room_code
 * @property int $sup_room_details_id
 * @property Carbon $room_avail_date
 * @property string $meal_plan
 * @property float $room_rate
 * @property float $adult_rate
 * @property float $double_rate
 * @property float $triple_rate
 * @property float $quad_rate
 * @property float $child_rate
 * @property int $min_night_stay
 * @property float $discount
 * @property int $rooms_available
 * @property int $status
 * @property Carbon $last_updated
 *
 * @package App\Models
 */
class SupHotelRoomRate extends Model
{
	protected $table = 'sup_hotel_room_rates';
	protected $primaryKey = 'sup_hotel_room_rates_id';
	public $timestamps = false;

	protected $casts = [
		'sup_hotel_room_rates_list_id' => 'int',
		'supplier_id' => 'int',
		'sup_hotel_id' => 'int',
		'sup_room_details_id' => 'int',
		'room_rate' => 'float',
		'adult_rate' => 'float',
		'double_rate' => 'float',
		'triple_rate' => 'float',
		'quad_rate' => 'float',
		'child_rate' => 'float',
		'min_night_stay' => 'int',
		'discount' => 'float',
		'rooms_available' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'room_avail_date',
		'last_updated'
	];

	protected $fillable = [
		'sup_hotel_room_rates_list_id',
		'supplier_id',
		'sup_hotel_id',
		'hotel_code',
		'room_code',
		'sup_room_details_id',
		'room_avail_date',
		'meal_plan',
		'room_rate',
		'adult_rate',
		'double_rate',
		'triple_rate',
		'quad_rate',
		'child_rate',
		'min_night_stay',
		'discount',
		'rooms_available',
		'status',
		'last_updated'
	];
}
