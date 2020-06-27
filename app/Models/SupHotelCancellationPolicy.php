<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupHotelCancellationPolicy
 * 
 * @property int $id
 * @property int $supplier_id
 * @property string $policy_name
 * @property string $policy_description
 * @property Carbon $date_time
 *
 * @package App\Models
 */
class SupHotelCancellationPolicy extends Model
{
	protected $table = 'sup_hotel_cancellation_policy';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int'
	];

	protected $dates = [
		'date_time'
	];

	protected $fillable = [
		'supplier_id',
		'policy_name',
		'policy_description',
		'date_time'
	];
}
