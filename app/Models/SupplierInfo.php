<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupplierInfo
 * 
 * @property int $id
 * @property string $supplier_email
 * @property string $supplier_password
 * @property string $supplier_no
 * @property string $supplier_name
 * @property string $supplier_logo
 * @property string $currency_type
 * @property string $title
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $mobile_no
 * @property int $office_phone_no
 * @property string $address
 * @property string $pin_code
 * @property string $city
 * @property string $state
 * @property string $country
 * @property int $status
 * @property string $supplier_grade
 * @property string $account_id
 * @property string $physical_address
 * @property string $emergency_number
 * @property string $website
 * @property string $time_zone
 * @property string $office_timings
 * @property string $after_office_contact
 * @property string $telephone_no
 * @property string $holiday
 * @property string $region
 * @property string $nationality
 * @property string $module_permission
 * @property string $confirm_page_parmission
 * @property string $tax_included_permission
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $activation_key
 * @property bool $notification_flag
 *
 * @package App\Models
 */
class SupplierInfo extends Model
{
	protected $table = 'supplier_info';

	protected $casts = [
		'office_phone_no' => 'int',
		'status' => 'int',
		'notification_flag' => 'bool'
	];

	protected $hidden = [
		'supplier_password'
	];

	protected $fillable = [
		'supplier_email',
		'supplier_password',
		'supplier_no',
		'supplier_name',
		'supplier_logo',
		'currency_type',
		'title',
		'first_name',
		'middle_name',
		'last_name',
		'mobile_no',
		'office_phone_no',
		'address',
		'pin_code',
		'city',
		'state',
		'country',
		'status',
		'supplier_grade',
		'account_id',
		'physical_address',
		'emergency_number',
		'website',
		'time_zone',
		'office_timings',
		'after_office_contact',
		'telephone_no',
		'holiday',
		'region',
		'nationality',
		'module_permission',
		'confirm_page_parmission',
		'tax_included_permission',
		'activation_key',
		'notification_flag'
	];
}
