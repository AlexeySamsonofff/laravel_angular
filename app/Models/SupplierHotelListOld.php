<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupplierHotelListOld
 * 
 * @property int $supplier_hotel_list_id
 * @property int $supplier_id
 * @property string $hotel_code
 * @property string $hotel_name
 * @property string $hotel_star_rating
 * @property string $hotel_property_type
 * @property string $hotel_group
 * @property string $property_code
 * @property string $property_address
 * @property string $hotel_address
 * @property string $hotel_address2
 * @property string $hotel_neighbourhood
 * @property string $hotel_gps
 * @property int $totalnoofbookings
 * @property string $release_date
 * @property string $year_built
 * @property string $account_no
 * @property string $weekend_day
 * @property string $latitude
 * @property string $longitude
 * @property string $hotel_desc
 * @property string $cityid
 * @property string $cityName
 * @property string $hotel_city
 * @property string $hotel_state
 * @property string $hotel_country
 * @property string $hotel_pin
 * @property string $email
 * @property string $address
 * @property string $location
 * @property string $price_type
 * @property string $currency_type
 * @property string $module_permission
 * @property string $places_near_by
 * @property string $hotel_email
 * @property string $reservation_email
 * @property string $sales_email
 * @property string $hotel_extension
 * @property string $hotel_telephone
 * @property string $hotel_fax
 * @property string $hotel_mobile
 * @property string $booking_phone
 * @property string $management_phone
 * @property string $emergency_no
 * @property string $hotel_website
 * @property string $hotel_facilities
 * @property string $check_in
 * @property string $check_out
 * @property string $general_notes
 * @property string $children_policy
 * @property string $check_in_policy
 * @property string $check_out_policy
 * @property string $policy
 * @property string $cancellation_policy
 * @property string $pet_policy
 * @property Carbon $created_date
 * @property Carbon $last_updated
 * @property bool $status
 * @property bool $admin_status
 * @property string $thumb_img
 *
 * @package App\Models
 */
class SupplierHotelListOld extends Model
{
	protected $table = 'supplier_hotel_list_old';
	protected $primaryKey = 'supplier_hotel_list_id';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int',
		'totalnoofbookings' => 'int',
		'status' => 'bool',
		'admin_status' => 'bool'
	];

	protected $dates = [
		'created_date',
		'last_updated'
	];

	protected $fillable = [
		'supplier_id',
		'hotel_code',
		'hotel_name',
		'hotel_star_rating',
		'hotel_property_type',
		'hotel_group',
		'property_code',
		'property_address',
		'hotel_address',
		'hotel_address2',
		'hotel_neighbourhood',
		'hotel_gps',
		'totalnoofbookings',
		'release_date',
		'year_built',
		'account_no',
		'weekend_day',
		'latitude',
		'longitude',
		'hotel_desc',
		'cityid',
		'cityName',
		'hotel_city',
		'hotel_state',
		'hotel_country',
		'hotel_pin',
		'email',
		'address',
		'location',
		'price_type',
		'currency_type',
		'module_permission',
		'places_near_by',
		'hotel_email',
		'reservation_email',
		'sales_email',
		'hotel_extension',
		'hotel_telephone',
		'hotel_fax',
		'hotel_mobile',
		'booking_phone',
		'management_phone',
		'emergency_no',
		'hotel_website',
		'hotel_facilities',
		'check_in',
		'check_out',
		'general_notes',
		'children_policy',
		'check_in_policy',
		'check_out_policy',
		'policy',
		'cancellation_policy',
		'pet_policy',
		'created_date',
		'last_updated',
		'status',
		'admin_status',
		'thumb_img'
	];
}
