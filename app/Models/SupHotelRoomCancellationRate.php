<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupHotelRoomCancellationRate
 * 
 * @property int $id
 * @property int $sup_hotel_room_rates_list_id
 * @property int $supplier_id
 * @property int $sup_hotel_id
 * @property string $hotel_code
 * @property int $sup_room_details_id
 * @property string $room_code
 * @property string $meal_plan
 * @property int $days_before_checkin
 * @property int $per_rate_charge
 * @property string $cancel_rates_type
 * @property Carbon $room_avail_date
 * @property Carbon $date_time
 * @property int $policy_id
 * @property int $season_id
 * @property string $policy_name
 *
 * @package App\Models
 */
class SupHotelRoomCancellationRate extends Model
{
	protected $table = 'sup_hotel_room_cancellation_rates';
	public $timestamps = false;

	protected $casts = [
		'sup_hotel_room_rates_list_id' => 'int',
		'supplier_id' => 'int',
		'sup_hotel_id' => 'int',
		'sup_room_details_id' => 'int',
		'days_before_checkin' => 'int',
		'per_rate_charge' => 'int',
		'policy_id' => 'int',
		'season_id' => 'int'
	];

	protected $dates = [
		'room_avail_date',
		'date_time'
	];

	protected $fillable = [
		'sup_hotel_room_rates_list_id',
		'supplier_id',
		'sup_hotel_id',
		'hotel_code',
		'sup_room_details_id',
		'room_code',
		'meal_plan',
		'days_before_checkin',
		'per_rate_charge',
		'cancel_rates_type',
		'room_avail_date',
		'date_time',
		'policy_id',
		'season_id',
		'policy_name'
	];
}
