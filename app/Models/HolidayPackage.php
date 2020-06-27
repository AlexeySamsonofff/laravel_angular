<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HolidayPackage
 * 
 * @property int $id
 * @property int $supplier_id
 * @property string $package_title
 * @property string $package_code
 * @property string $duration
 * @property string $destination
 * @property string $state
 * @property string $country
 * @property string $continent
 * @property int $package_rating
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property string $short_desc
 * @property string $package_desc
 * @property string $package_good
 * @property string $highlights
 * @property string $inclusion
 * @property string $exclusion
 * @property string $terms
 * @property float $price
 * @property bool $discount_type
 * @property float $discount_price
 * @property int $discount_value
 * @property string $theme_id
 * @property string $status
 * @property string $child_allowed
 * @property int $minChildAge
 * @property int $maxChildAge
 * @property int $minAdultAge
 * @property int $minPaxOperating
 * @property int $maxPaxOperating
 * @property string $holiday_type
 * @property string $operation_day
 * @property string $closed_dates
 * @property string $closed_reason
 * @property string $currency_code
 * @property string $reservation_email
 * @property string $operated_by
 * @property string $operator_no
 * @property string $emergency_no
 * @property string $thumb_img
 * @property string $child_policy
 * @property string $cancellation_policy
 * @property string $policy
 * @property string $photo_policy
 * @property string $rate_desc
 * @property string $things_to_bring
 *
 * @package App\Models
 */
class HolidayPackage extends Model
{
	protected $table = 'holiday_packages';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int',
		'package_rating' => 'int',
		'price' => 'float',
		'discount_type' => 'bool',
		'discount_price' => 'float',
		'discount_value' => 'int',
		'minChildAge' => 'int',
		'maxChildAge' => 'int',
		'minAdultAge' => 'int',
		'minPaxOperating' => 'int',
		'maxPaxOperating' => 'int'
	];

	protected $dates = [
		'start_date',
		'end_date'
	];

	protected $fillable = [
		'supplier_id',
		'package_title',
		'package_code',
		'duration',
		'destination',
		'state',
		'country',
		'continent',
		'package_rating',
		'start_date',
		'end_date',
		'short_desc',
		'package_desc',
		'package_good',
		'highlights',
		'inclusion',
		'exclusion',
		'terms',
		'price',
		'discount_type',
		'discount_price',
		'discount_value',
		'theme_id',
		'status',
		'child_allowed',
		'minChildAge',
		'maxChildAge',
		'minAdultAge',
		'minPaxOperating',
		'maxPaxOperating',
		'holiday_type',
		'operation_day',
		'closed_dates',
		'closed_reason',
		'currency_code',
		'reservation_email',
		'operated_by',
		'operator_no',
		'emergency_no',
		'thumb_img',
		'child_policy',
		'cancellation_policy',
		'policy',
		'photo_policy',
		'rate_desc',
		'things_to_bring'
	];
}
