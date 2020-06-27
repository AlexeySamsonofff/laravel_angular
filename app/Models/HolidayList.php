<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HolidayList
 * 
 * @property int $holiday_id
 * @property string $package_title
 * @property string $package_code
 * @property string $duration
 * @property string $destination
 * @property string $state
 * @property string $country
 * @property string $continent
 * @property int $package_popularity
 * @property int $package_rating
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property string $short_desc
 * @property string $package_desc
 * @property string $package_good
 * @property string $comfort
 * @property string $quality
 * @property string $luxury
 * @property string $highlights
 * @property string $inclusion
 * @property string $exclusion
 * @property string $terms
 * @property int $price
 * @property string $theme_id
 * @property string $category
 * @property string $month_dur
 * @property bool $hot_offer
 * @property bool $trending_dest
 * @property bool $location_dest
 * @property string $trending_section
 * @property string $trending_img
 * @property string $location_img
 * @property bool $offbeat_place
 * @property bool $deals
 * @property bool $inspiration_place
 * @property string $status
 * @property string $child_allowed
 * @property int $minChildAge
 * @property int $maxChildAge
 * @property int $minAdultAge
 * @property int $minPaxOperating
 * @property int $maxPaxOperating
 * @property bool $discount_type
 * @property int $discount_value
 *
 * @package App\Models
 */
class HolidayList extends Model
{
	protected $table = 'holiday_list';
	protected $primaryKey = 'holiday_id';
	public $timestamps = false;

	protected $casts = [
		'package_popularity' => 'int',
		'package_rating' => 'int',
		'price' => 'int',
		'hot_offer' => 'bool',
		'trending_dest' => 'bool',
		'location_dest' => 'bool',
		'offbeat_place' => 'bool',
		'deals' => 'bool',
		'inspiration_place' => 'bool',
		'minChildAge' => 'int',
		'maxChildAge' => 'int',
		'minAdultAge' => 'int',
		'minPaxOperating' => 'int',
		'maxPaxOperating' => 'int',
		'discount_type' => 'bool',
		'discount_value' => 'int'
	];

	protected $dates = [
		'start_date',
		'end_date'
	];

	protected $fillable = [
		'package_title',
		'package_code',
		'duration',
		'destination',
		'state',
		'country',
		'continent',
		'package_popularity',
		'package_rating',
		'start_date',
		'end_date',
		'short_desc',
		'package_desc',
		'package_good',
		'comfort',
		'quality',
		'luxury',
		'highlights',
		'inclusion',
		'exclusion',
		'terms',
		'price',
		'theme_id',
		'category',
		'month_dur',
		'hot_offer',
		'trending_dest',
		'location_dest',
		'trending_section',
		'trending_img',
		'location_img',
		'offbeat_place',
		'deals',
		'inspiration_place',
		'status',
		'child_allowed',
		'minChildAge',
		'maxChildAge',
		'minAdultAge',
		'minPaxOperating',
		'maxPaxOperating',
		'discount_type',
		'discount_value'
	];
}
