<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupHotelRoomRatesList
 * 
 * @property int $sup_hotel_room_rates_list_id
 * @property int $supplier_id
 * @property int $sup_hotel_id
 * @property string $hotel_code
 * @property string $room_code
 * @property int $sup_room_details_id
 * @property Carbon $from_date
 * @property Carbon $to_date
 * @property string $meal_plan
 * @property string $cancellation_policy
 * @property float $room_rate
 * @property float $adult_rate
 * @property float $double_rate
 * @property string $triple_rate
 * @property string $quad_rate
 * @property string $child_rate
 * @property int $min_night_stay
 * @property float $discount
 * @property int $status
 * @property Carbon $last_updated
 * @property bool $is_deleted
 * @property int $policy_id
 * @property int $season_id
 * @property string $policy_name
 *
 * @package App\Models
 */
class SupHotelRoomRatesList extends Model
{
	protected $table = 'sup_hotel_room_rates_list';
	protected $primaryKey = 'sup_hotel_room_rates_list_id';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int',
		'sup_hotel_id' => 'int',
		'sup_room_details_id' => 'int',
		'room_rate' => 'float',
		'adult_rate' => 'float',
		'double_rate' => 'float',
		'min_night_stay' => 'int',
		'discount' => 'float',
		'status' => 'int',
		'is_deleted' => 'bool',
		'policy_id' => 'int',
		'season_id' => 'int'
	];

	protected $dates = [
		'from_date',
		'to_date',
		'last_updated'
	];

	protected $fillable = [
		'supplier_id',
		'sup_hotel_id',
		'hotel_code',
		'room_code',
		'sup_room_details_id',
		'from_date',
		'to_date',
		'meal_plan',
		'cancellation_policy',
		'room_rate',
		'adult_rate',
		'double_rate',
		'triple_rate',
		'quad_rate',
		'child_rate',
		'min_night_stay',
		'discount',
		'status',
		'last_updated',
		'is_deleted',
		'policy_id',
		'season_id',
		'policy_name'
	];
}
