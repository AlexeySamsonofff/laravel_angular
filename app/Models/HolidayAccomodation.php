<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HolidayAccomodation
 * 
 * @property int $id
 * @property int $supplier_id
 * @property string $hotel_name
 * @property string $accomodation_type
 * @property string $description
 * @property string $hotel_city
 * @property string $contact_no
 * @property string $address
 * @property string $thumb_img
 * @property bool $status
 *
 * @package App\Models
 */
class HolidayAccomodation extends Model
{
	protected $table = 'holiday_accomodation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'supplier_id' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'supplier_id',
		'hotel_name',
		'accomodation_type',
		'description',
		'hotel_city',
		'contact_no',
		'address',
		'thumb_img',
		'status'
	];
}
