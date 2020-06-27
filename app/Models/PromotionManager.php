<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PromotionManager
 * 
 * @property int $id
 * @property string $service_type
 * @property string $promo_name
 * @property string $promo_code
 * @property int $discount
 * @property string $discount_type
 * @property float $amount_min
 * @property float $amount_max
 * @property Carbon $promo_expire
 * @property Carbon $created_datetime
 * @property int $status
 *
 * @package App\Models
 */
class PromotionManager extends Model
{
	protected $table = 'promotion_manager';
	public $timestamps = false;

	protected $casts = [
		'discount' => 'int',
		'amount_min' => 'float',
		'amount_max' => 'float',
		'status' => 'int'
	];

	protected $dates = [
		'promo_expire',
		'created_datetime'
	];

	protected $fillable = [
		'service_type',
		'promo_name',
		'promo_code',
		'discount',
		'discount_type',
		'amount_min',
		'amount_max',
		'promo_expire',
		'created_datetime',
		'status'
	];
}
