<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupVillaBooking
 * 
 * @property int $id
 * @property int $booking_id
 * @property int $supplier_id
 * @property string $uniqueRefNo
 * @property string $villa_code
 * @property string $villa_name
 * @property Carbon $check_in
 * @property Carbon $check_out
 * @property Carbon $booking_date
 * @property string $city
 * @property int $bedrooms
 * @property int $bathrooms
 * @property int $guests
 * @property float $total_amount
 * @property float $net_amount
 * @property float $discount
 * @property float $tax
 * @property bool $paid_status
 * @property string $remarks
 * @property string $comment_desc
 * @property int $user_id
 * @property Carbon $date_time
 *
 * @package App\Models
 */
class SupVillaBooking extends Model
{
	protected $table = 'sup_villa_booking';
	public $timestamps = false;

	protected $casts = [
		'booking_id' => 'int',
		'supplier_id' => 'int',
		'bedrooms' => 'int',
		'bathrooms' => 'int',
		'guests' => 'int',
		'total_amount' => 'float',
		'net_amount' => 'float',
		'discount' => 'float',
		'tax' => 'float',
		'paid_status' => 'bool',
		'user_id' => 'int'
	];

	protected $dates = [
		'check_in',
		'check_out',
		'booking_date',
		'date_time'
	];

	protected $fillable = [
		'booking_id',
		'supplier_id',
		'uniqueRefNo',
		'villa_code',
		'villa_name',
		'check_in',
		'check_out',
		'booking_date',
		'city',
		'bedrooms',
		'bathrooms',
		'guests',
		'total_amount',
		'net_amount',
		'discount',
		'tax',
		'paid_status',
		'remarks',
		'comment_desc',
		'user_id',
		'date_time'
	];
}
