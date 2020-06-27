<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelBookingReport
 * 
 * @property int $report_id
 * @property int $user_id
 * @property string $user_no
 * @property int $agent_id
 * @property int $supplier_id
 * @property string $Api_Name
 * @property string $Hotel_RefNo
 * @property string $Booking_RefNo
 * @property string $uniqueRefNo
 * @property string $inclusion
 * @property float $promotional_discount
 * @property string $Booking_Status
 * @property Carbon $Booking_Date
 * @property float $Net_Amount
 * @property float $Deducted_Amount
 * @property float $sup_tax_amt
 * @property float $government_tax
 * @property float $resort_fee
 * @property float $service_tax
 * @property float $Booking_Amount
 * @property float $total_cost
 * @property float $discount
 * @property float $Admin_Markup
 * @property float $Admin_Agent_Markup
 * @property float $Agent_Markup
 * @property float $Payment_Charge
 * @property string $Currency
 * @property string $Xml_Currency
 * @property string $cancel_policy
 * @property string $hp_additional_info
 * @property string $Cancellation_Status
 * @property string $Cancelled_By
 * @property string $Payment_Id
 * @property string $Payment_Status
 * @property string $Booking_Done_By
 * @property string $special_request
 * @property string $Cancellation_date
 * @property string $currency_conv_value
 * @property string $ROE
 * @property string $payment_type
 * @property string $room_inclusion
 * @property float $Di_Markup
 * @property float $Di_Agent_Markup
 * @property float $Sub_Agent_Markup
 * @property string $room_booking_dotwcode
 * @property string $room_booking_dotwno
 * @property string $paymentGuaranteedBy
 * @property string $rate_basis
 * @property string $agent_type
 * @property string $tboholidays_InvoiceNumber
 * @property string $tboholidays_SupplierReferenceNo
 * @property string $tboholidays_VoucherStatus
 * @property string $Cancellation_deadline
 * @property string $room_type_name
 * @property string $hotelbeds_holder
 * @property string $hotelbeds_supplier
 * @property string $rateComments
 * @property string $room_occupancy
 * @property string $user_name
 * @property string $user_email
 * @property string $user_mobile
 * @property string $user_country
 * @property string $user_pincode
 * @property string $user_city
 * @property string $user_state
 * @property string $user_address
 * @property string $allotment_arr
 *
 * @package App\Models
 */
class HotelBookingReport extends Model
{
	protected $table = 'hotel_booking_reports';
	protected $primaryKey = 'report_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'agent_id' => 'int',
		'supplier_id' => 'int',
		'promotional_discount' => 'float',
		'Net_Amount' => 'float',
		'Deducted_Amount' => 'float',
		'sup_tax_amt' => 'float',
		'government_tax' => 'float',
		'resort_fee' => 'float',
		'service_tax' => 'float',
		'Booking_Amount' => 'float',
		'total_cost' => 'float',
		'discount' => 'float',
		'Admin_Markup' => 'float',
		'Admin_Agent_Markup' => 'float',
		'Agent_Markup' => 'float',
		'Payment_Charge' => 'float',
		'Di_Markup' => 'float',
		'Di_Agent_Markup' => 'float',
		'Sub_Agent_Markup' => 'float'
	];

	protected $dates = [
		'Booking_Date'
	];

	protected $fillable = [
		'user_id',
		'user_no',
		'agent_id',
		'supplier_id',
		'Api_Name',
		'Hotel_RefNo',
		'Booking_RefNo',
		'uniqueRefNo',
		'inclusion',
		'promotional_discount',
		'Booking_Status',
		'Booking_Date',
		'Net_Amount',
		'Deducted_Amount',
		'sup_tax_amt',
		'government_tax',
		'resort_fee',
		'service_tax',
		'Booking_Amount',
		'total_cost',
		'discount',
		'Admin_Markup',
		'Admin_Agent_Markup',
		'Agent_Markup',
		'Payment_Charge',
		'Currency',
		'Xml_Currency',
		'cancel_policy',
		'hp_additional_info',
		'Cancellation_Status',
		'Cancelled_By',
		'Payment_Id',
		'Payment_Status',
		'Booking_Done_By',
		'special_request',
		'Cancellation_date',
		'currency_conv_value',
		'ROE',
		'payment_type',
		'room_inclusion',
		'Di_Markup',
		'Di_Agent_Markup',
		'Sub_Agent_Markup',
		'room_booking_dotwcode',
		'room_booking_dotwno',
		'paymentGuaranteedBy',
		'rate_basis',
		'agent_type',
		'tboholidays_InvoiceNumber',
		'tboholidays_SupplierReferenceNo',
		'tboholidays_VoucherStatus',
		'Cancellation_deadline',
		'room_type_name',
		'hotelbeds_holder',
		'hotelbeds_supplier',
		'rateComments',
		'room_occupancy',
		'user_name',
		'user_email',
		'user_mobile',
		'user_country',
		'user_pincode',
		'user_city',
		'user_state',
		'user_address',
		'allotment_arr'
	];
}
