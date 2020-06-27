<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PromotionOtum
 * 
 * @property int $id
 * @property int $supplier_id
 * @property string $promo_type
 * @property string $promo_name
 * @property string $hotel_code
 * @property string $room_code
 * @property string $promo_audience
 * @property int $minimum_night
 * @property string $booking_period
 * @property float $before_checkin_days
 * @property float $before_checkin_hours
 * @property string $stay_period
 * @property string $applicable_days
 * @property string $applicable_day
 * @property float $discount
 * @property string $sale_code
 * @property string $block_date
 * @property bool $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class PromotionOtum extends Model
{
	protected $table = 'promotion_ota';

	protected $casts = [
		'supplier_id' => 'int',
		'minimum_night' => 'int',
		'before_checkin_days' => 'float',
		'before_checkin_hours' => 'float',
		'discount' => 'float',
		'status' => 'bool'
	];

	protected $fillable = [
		'supplier_id',
		'promo_type',
		'promo_name',
		'hotel_code',
		'room_code',
		'promo_audience',
		'minimum_night',
		'booking_period',
		'before_checkin_days',
		'before_checkin_hours',
		'stay_period',
		'applicable_days',
		'applicable_day',
		'discount',
		'sale_code',
		'block_date',
		'status'
	];
}
