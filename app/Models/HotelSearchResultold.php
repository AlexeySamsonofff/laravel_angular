<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelSearchResultold
 * 
 * @property int $search_id
 * @property string $session_id
 * @property string $uniqueRefNo
 * @property string $api
 * @property string $city_code
 * @property string $city_name
 * @property string $hotel_code
 * @property int $unique_cityid
 * @property string $hotel_property_id
 * @property string $room_code
 * @property string $room_type
 * @property string $room_type_id
 * @property string $room_name
 * @property string $room_description
 * @property string $image
 * @property string $room_details_info
 * @property string $hotel_supplier_id
 * @property int $room_capacity
 * @property string $rate_plan_code
 * @property string $room_image
 * @property string $hotel_address
 * @property string $amount_before_tax
 * @property string $tax
 * @property string $discount_coupon
 * @property string $amount_to_send
 * @property string $tax_to_send
 * @property string $hotel_type
 * @property string $description
 * @property string $star
 * @property string $amenities
 * @property string $room_amenities
 * @property float $net_fare
 * @property float $total_cost
 * @property float $currency_conv_value
 * @property string $ROE
 * @property string $status
 * @property int $adult
 * @property int $child
 * @property int $infant
 * @property string $child_age
 * @property string $hotel_name
 * @property string $promotions
 * @property string $remarks
 * @property string $room_count
 * @property float $markup
 * @property float $agent_markup
 * @property float $sub_agent_markup
 * @property float $org_amt
 * @property string $xml_currency
 * @property string $currency
 * @property float $currency_val
 * @property float $payment_charge
 * @property string $cancel_policy
 * @property Carbon $search_datetime
 * @property string $curr_date_time
 * @property float $discount
 * @property string $share_bed
 * @property string $per_room_cost
 * @property float $admin_markup
 * @property float $admin_agent_markup
 * @property string $mealType
 * @property string $mealName
 * @property string $meallabelid
 * @property string $meallabeltext
 * @property int $nights
 * @property string $room_runno
 * @property string $extrabeds
 * @property string $fitruums_notes
 * @property string $fitruums_isSuperDeal
 * @property string $fitruums_isBestBuy
 * @property string $fitruums_paymentMethod_id
 * @property string $fitruums_payment_property
 * @property string $resort_id
 * @property string $resort_name
 * @property string $transfer
 * @property string $fitruumsPreBookCode
 * @property string $trustYouID
 * @property string $priceChange
 * @property int $wish_list
 * @property int $compare_list
 *
 * @package App\Models
 */
class HotelSearchResultold extends Model
{
	protected $table = 'hotel_search_resultold';
	protected $primaryKey = 'search_id';
	public $timestamps = false;

	protected $casts = [
		'unique_cityid' => 'int',
		'room_capacity' => 'int',
		'net_fare' => 'float',
		'total_cost' => 'float',
		'currency_conv_value' => 'float',
		'adult' => 'int',
		'child' => 'int',
		'infant' => 'int',
		'markup' => 'float',
		'agent_markup' => 'float',
		'sub_agent_markup' => 'float',
		'org_amt' => 'float',
		'currency_val' => 'float',
		'payment_charge' => 'float',
		'discount' => 'float',
		'admin_markup' => 'float',
		'admin_agent_markup' => 'float',
		'nights' => 'int',
		'wish_list' => 'int',
		'compare_list' => 'int'
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
		'hotel_code',
		'unique_cityid',
		'hotel_property_id',
		'room_code',
		'room_type',
		'room_type_id',
		'room_name',
		'room_description',
		'image',
		'room_details_info',
		'hotel_supplier_id',
		'room_capacity',
		'rate_plan_code',
		'room_image',
		'hotel_address',
		'amount_before_tax',
		'tax',
		'discount_coupon',
		'amount_to_send',
		'tax_to_send',
		'hotel_type',
		'description',
		'star',
		'amenities',
		'room_amenities',
		'net_fare',
		'total_cost',
		'currency_conv_value',
		'ROE',
		'status',
		'adult',
		'child',
		'infant',
		'child_age',
		'hotel_name',
		'promotions',
		'remarks',
		'room_count',
		'markup',
		'agent_markup',
		'sub_agent_markup',
		'org_amt',
		'xml_currency',
		'currency',
		'currency_val',
		'payment_charge',
		'cancel_policy',
		'search_datetime',
		'curr_date_time',
		'discount',
		'share_bed',
		'per_room_cost',
		'admin_markup',
		'admin_agent_markup',
		'mealType',
		'mealName',
		'meallabelid',
		'meallabeltext',
		'nights',
		'room_runno',
		'extrabeds',
		'fitruums_notes',
		'fitruums_isSuperDeal',
		'fitruums_isBestBuy',
		'fitruums_paymentMethod_id',
		'fitruums_payment_property',
		'resort_id',
		'resort_name',
		'transfer',
		'fitruumsPreBookCode',
		'trustYouID',
		'priceChange',
		'wish_list',
		'compare_list'
	];
}
