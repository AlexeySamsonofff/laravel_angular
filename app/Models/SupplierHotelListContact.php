<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupplierHotelListContact
 * 
 * @property int $id
 * @property string $contact_title
 * @property string $contact_name
 * @property string $contact_surname
 * @property string $contact_department
 * @property string $contact_role
 * @property string $contact_telephone
 * @property string $contact_mobile
 * @property string $contact_email
 * @property Carbon $last_updated
 * @property Carbon $created_date
 * @property int $supplier_hotel_list_id
 * @property int $supplier_id
 * @property string $property_code
 *
 * @package App\Models
 */
class SupplierHotelListContact extends Model
{
	protected $table = 'supplier_hotel_list_contact';
	public $timestamps = false;

	protected $casts = [
		'supplier_hotel_list_id' => 'int',
		'supplier_id' => 'int'
	];

	protected $dates = [
		'last_updated',
		'created_date'
	];

	protected $fillable = [
		'contact_title',
		'contact_name',
		'contact_surname',
		'contact_department',
		'contact_role',
		'contact_telephone',
		'contact_mobile',
		'contact_email',
		'last_updated',
		'created_date',
		'supplier_hotel_list_id',
		'supplier_id',
		'property_code'
	];
}
