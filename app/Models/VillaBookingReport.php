<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VillaBookingReport
 * 
 * @property int $report_id
 * @property int $user_id
 * @property string $user_no
 * @property int $agent_id
 * @property int $supplier_id
 * @property string $Api_Name
 * @property string $Booking_RefNo
 * @property string $uniqueRefNo
 * @property float $promotional_discount
 * @property string $Booking_Status
 * @property Carbon $Booking_Date
 * @property string $allotment_arr
 * @property float $Net_Amount
 * @property float $Deducted_Amount
 * @property float $Booking_Amount
 * @property float $total_cost
 * @property float $Admin_Markup
 * @property float $Admin_Agent_Markup
 * @property float $Agent_Markup
 * @property float $Payment_Charge
 * @property string $Currency
 * @property string $Xml_Currency
 * @property string $cancel_policy
 * @property string $Cancellation_Status
 * @property string $Cancelled_By
 * @property string $Payment_Id
 * @property string $Payment_Status
 * @property string $Booking_Done_By
 * @property string $Cancellation_date
 * @property string $currency_conv_value
 * @property string $ROE
 * @property string $payment_type
 * @property float $Di_Markup
 * @property float $Di_Agent_Markup
 * @property float $Sub_Agent_Markup
 * @property string $paymentGuaranteedBy
 * @property string $agent_type
 * @property string $user_name
 * @property string $user_email
 * @property string $user_mobile
 * @property string $user_country
 * @property string $user_pincode
 * @property string $user_city
 * @property string $user_state
 * @property string $user_address
 *
 * @package App\Models
 */
class VillaBookingReport extends Model
{
	protected $table = 'villa_booking_reports';
	protected $primaryKey = 'report_id';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'agent_id' => 'int',
		'supplier_id' => 'int',
		'promotional_discount' => 'float',
		'Net_Amount' => 'float',
		'Deducted_Amount' => 'float',
		'Booking_Amount' => 'float',
		'total_cost' => 'float',
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
		'Booking_RefNo',
		'uniqueRefNo',
		'promotional_discount',
		'Booking_Status',
		'Booking_Date',
		'allotment_arr',
		'Net_Amount',
		'Deducted_Amount',
		'Booking_Amount',
		'total_cost',
		'Admin_Markup',
		'Admin_Agent_Markup',
		'Agent_Markup',
		'Payment_Charge',
		'Currency',
		'Xml_Currency',
		'cancel_policy',
		'Cancellation_Status',
		'Cancelled_By',
		'Payment_Id',
		'Payment_Status',
		'Booking_Done_By',
		'Cancellation_date',
		'currency_conv_value',
		'ROE',
		'payment_type',
		'Di_Markup',
		'Di_Agent_Markup',
		'Sub_Agent_Markup',
		'paymentGuaranteedBy',
		'agent_type',
		'user_name',
		'user_email',
		'user_mobile',
		'user_country',
		'user_pincode',
		'user_city',
		'user_state',
		'user_address'
	];
}
