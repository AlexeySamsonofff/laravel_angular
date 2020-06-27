<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupplierHotelList
 * 
 * @property int $supplier_hotel_list_id
 * @property int $supplier_id
 * @property string $hotel_code
 * @property string $amadeus_code
 * @property string $hotel_name
 * @property string $hotel_star_rating
 * @property string $hotel_property_type
 * @property int $totalnoofbookings
 * @property string $release_day
 * @property string $year_built
 * @property string $account_no
 * @property string $weekend_day
 * @property string $latitude
 * @property string $longitude
 * @property string $hotel_desc
 * @property string $cityid
 * @property string $hotel_city
 * @property string $hotel_country
 * @property string $email
 * @property string $call_a_reserve
 * @property string $address
 * @property string $location
 * @property int $ta_location_id
 * @property string $price_type
 * @property string $currency_type
 * @property string $module_permission
 * @property string $places_near_by
 * @property string $hotel_email
 * @property string $reservation_email
 * @property string $sales_email
 * @property string $hotel_phone
 * @property string $hotel_fax
 * @property string $hotel_mobile
 * @property string $booking_phone
 * @property string $management_phone
 * @property string $emergency_no
 * @property string $hotel_website
 * @property string $hotel_facilities
 * @property string $check_in
 * @property string $check_out
 * @property string $thumb_img
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_description
 * @property string $policy
 * @property string $child_policy
 * @property string $cancellation_policy
 * @property string $terms_and_condition
 * @property Carbon $created_date
 * @property Carbon $last_updated
 * @property bool $status
 * @property bool $admin_status
 * @property float $supplier_tax_percent
 * @property float $government_tax
 * @property float $resort_fee
 * @property float $service_tax
 * @property string $photo_policy
 * @property string $rate_desc
 * @property string $room_charge_disclosure
 * @property bool $discount_type
 * @property int $discount_value
 * @property string $minimum_check_in
 * @property string $Check_in_instructions
 * @property string $mealplan
 * @property string $meal_plan_desc
 * @property string $internet
 * @property string $language
 * @property string $close_by
 * @property string $hotel_parking_type
 * @property string $pets_allow
 * @property string $nearby
 * @property string $entertainment
 * @property string $pool
 * @property string $imp_information
 * @property string $exclusions
 * @property string $transfers
 * @property string $fees
 * @property string $tax_included
 * @property string $last_minute_booking
 * @property int $minstay
 * @property bool $notification_flag
 * @property Carbon $notification_time
 * @property string $notification_msg
 *
 * @package App\Models
 */
class SupplierHotelList extends Model
{
	protected $table = 'supplier_hotel_list';
	protected $primaryKey = 'supplier_hotel_list_id';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int',
		'totalnoofbookings' => 'int',
		'ta_location_id' => 'int',
		'status' => 'bool',
		'admin_status' => 'bool',
		'supplier_tax_percent' => 'float',
		'government_tax' => 'float',
		'resort_fee' => 'float',
		'service_tax' => 'float',
		'discount_type' => 'bool',
		'discount_value' => 'int',
		'minstay' => 'int',
		'notification_flag' => 'bool'
	];

	protected $dates = [
		'created_date',
		'last_updated',
		'notification_time'
	];

	protected $fillable = [
		'supplier_id',
		'hotel_code',
		'amadeus_code',
		'hotel_name',
		'hotel_star_rating',
		'hotel_property_type',
		'totalnoofbookings',
		'release_day',
		'year_built',
		'account_no',
		'weekend_day',
		'latitude',
		'longitude',
		'hotel_desc',
		'cityid',
		'hotel_city',
		'hotel_country',
		'email',
		'call_a_reserve',
		'address',
		'location',
		'ta_location_id',
		'price_type',
		'currency_type',
		'module_permission',
		'places_near_by',
		'hotel_email',
		'reservation_email',
		'sales_email',
		'hotel_phone',
		'hotel_fax',
		'hotel_mobile',
		'booking_phone',
		'management_phone',
		'emergency_no',
		'hotel_website',
		'hotel_facilities',
		'check_in',
		'check_out',
		'thumb_img',
		'meta_title',
		'meta_keywords',
		'meta_description',
		'policy',
		'child_policy',
		'cancellation_policy',
		'terms_and_condition',
		'created_date',
		'last_updated',
		'status',
		'admin_status',
		'supplier_tax_percent',
		'government_tax',
		'resort_fee',
		'service_tax',
		'photo_policy',
		'rate_desc',
		'room_charge_disclosure',
		'discount_type',
		'discount_value',
		'minimum_check_in',
		'Check_in_instructions',
		'mealplan',
		'meal_plan_desc',
		'internet',
		'language',
		'close_by',
		'hotel_parking_type',
		'pets_allow',
		'nearby',
		'entertainment',
		'pool',
		'imp_information',
		'exclusions',
		'transfers',
		'fees',
		'tax_included',
		'last_minute_booking',
		'minstay',
		'notification_flag',
		'notification_time',
		'notification_msg'
	];
}
