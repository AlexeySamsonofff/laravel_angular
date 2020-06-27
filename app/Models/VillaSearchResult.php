<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VillaSearchResult
 * 
 * @property int $search_id
 * @property string $session_id
 * @property string $uniqueRefNo
 * @property string $api
 * @property string $city_code
 * @property string $city_name
 * @property int $supplier_id
 * @property string $villa_allotment_id
 * @property string $supplier_rate_info
 * @property string $villa_code
 * @property string $villa_name
 * @property bool $avail_type
 * @property bool $price_type
 * @property string $villa_capacity
 * @property int $guests
 * @property int $bedrooms
 * @property int $bathrooms
 * @property string $villa_address
 * @property string $description
 * @property string $star
 * @property string $amenities
 * @property string $image
 * @property string $cancel_policy
 * @property array $villa_crs_cancellation_json
 * @property int $duration
 * @property float $net_fare
 * @property float $org_amt
 * @property float $agent_markup
 * @property float $total_cost
 * @property string $amount_before_tax
 * @property string $discount_coupon
 * @property string $xml_currency
 * @property string $currency
 * @property float $currency_val
 * @property float $payment_charge
 * @property string $promotions
 * @property string $tax
 * @property string $ROE
 * @property float $currency_conv_value
 * @property float $discount
 * @property float $admin_markup
 * @property float $admin_agent_markup
 * @property string $status
 * @property Carbon $search_datetime
 * @property string $blocked_dates
 *
 * @package App\Models
 */
class VillaSearchResult extends Model
{
	protected $table = 'villa_search_result';
	protected $primaryKey = 'search_id';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int',
		'avail_type' => 'bool',
		'price_type' => 'bool',
		'guests' => 'int',
		'bedrooms' => 'int',
		'bathrooms' => 'int',
		'villa_crs_cancellation_json' => 'json',
		'duration' => 'int',
		'net_fare' => 'float',
		'org_amt' => 'float',
		'agent_markup' => 'float',
		'total_cost' => 'float',
		'currency_val' => 'float',
		'payment_charge' => 'float',
		'currency_conv_value' => 'float',
		'discount' => 'float',
		'admin_markup' => 'float',
		'admin_agent_markup' => 'float'
	];

	protected $dates = [
		'search_datetime'
	];

	protected $fillable = [
		'session_id',
		'uniqueRefNo',
		'api',
		'city_code',
		'city_name',
		'supplier_id',
		'villa_allotment_id',
		'supplier_rate_info',
		'villa_code',
		'villa_name',
		'avail_type',
		'price_type',
		'villa_capacity',
		'guests',
		'bedrooms',
		'bathrooms',
		'villa_address',
		'description',
		'star',
		'amenities',
		'image',
		'cancel_policy',
		'villa_crs_cancellation_json',
		'duration',
		'net_fare',
		'org_amt',
		'agent_markup',
		'total_cost',
		'amount_before_tax',
		'discount_coupon',
		'xml_currency',
		'currency',
		'currency_val',
		'payment_charge',
		'promotions',
		'tax',
		'ROE',
		'currency_conv_value',
		'discount',
		'admin_markup',
		'admin_agent_markup',
		'status',
		'search_datetime',
		'blocked_dates'
	];
}
