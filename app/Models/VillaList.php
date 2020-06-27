<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VillaList
 * 
 * @property int $id
 * @property int $supplier_id
 * @property string $module_permission
 * @property bool $availability_type
 * @property string $property_code
 * @property string $property_name
 * @property bool $property_type
 * @property bool $star_rating
 * @property string $city_name
 * @property string $country_name
 * @property string $cityid
 * @property string $short_desc
 * @property string $address
 * @property string $year_built
 * @property string $latitude
 * @property string $longitude
 * @property string $location
 * @property string $currency_type
 * @property bool $price_type
 * @property float $price
 * @property int $min_pax
 * @property int $max_pax
 * @property int $bedroom
 * @property int $bathroom
 * @property string $reservation_email
 * @property string $sales_email
 * @property string $phone
 * @property string $mobile
 * @property string $website
 * @property string $facilities
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
 * @property string $photo_policy
 * @property string $rate_desc
 * @property string $room_charge_disclosure
 * @property string $highlights
 * @property string $imp_info
 * @property Carbon $created_date
 * @property Carbon $last_updated
 * @property bool $status
 * @property bool $admin_status
 * @property float $supplier_tax_percent
 * @property bool $discount_type
 * @property int $discount_value
 *
 * @package App\Models
 */
class VillaList extends Model
{
	protected $table = 'villa_list';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int',
		'availability_type' => 'bool',
		'property_type' => 'bool',
		'star_rating' => 'bool',
		'price_type' => 'bool',
		'price' => 'float',
		'min_pax' => 'int',
		'max_pax' => 'int',
		'bedroom' => 'int',
		'bathroom' => 'int',
		'status' => 'bool',
		'admin_status' => 'bool',
		'supplier_tax_percent' => 'float',
		'discount_type' => 'bool',
		'discount_value' => 'int'
	];

	protected $dates = [
		'created_date',
		'last_updated'
	];

	protected $fillable = [
		'supplier_id',
		'module_permission',
		'availability_type',
		'property_code',
		'property_name',
		'property_type',
		'star_rating',
		'city_name',
		'country_name',
		'cityid',
		'short_desc',
		'address',
		'year_built',
		'latitude',
		'longitude',
		'location',
		'currency_type',
		'price_type',
		'price',
		'min_pax',
		'max_pax',
		'bedroom',
		'bathroom',
		'reservation_email',
		'sales_email',
		'phone',
		'mobile',
		'website',
		'facilities',
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
		'photo_policy',
		'rate_desc',
		'room_charge_disclosure',
		'highlights',
		'imp_info',
		'created_date',
		'last_updated',
		'status',
		'admin_status',
		'supplier_tax_percent',
		'discount_type',
		'discount_value'
	];
}
