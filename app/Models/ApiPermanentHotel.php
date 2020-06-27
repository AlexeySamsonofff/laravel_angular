<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ApiPermanentHotel
 * 
 * @property int $api_hotel_id
 * @property string $api
 * @property string $city_code
 * @property string $city_name
 * @property string $country_name
 * @property string $hotel_code
 * @property string $hotel_name
 * @property string $hotel_name_unique
 * @property string $star
 * @property string $image
 * @property string $location
 * @property string $latitude
 * @property string $longitude
 * @property string $address
 * @property string $phone
 * @property string $fax
 * @property string $postal
 * @property string $email
 * @property string $room_facilities
 * @property string $hotel_facilities
 * @property string $description
 * @property int $supplier_id
 * @property string $distances
 * @property bool $status
 * @property string $accomodation_type
 *
 * @package App\Models
 */
class ApiPermanentHotel extends Model
{
	protected $table = 'api_permanent_hotels';
	protected $primaryKey = 'api_hotel_id';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'api',
		'city_code',
		'city_name',
		'country_name',
		'hotel_code',
		'hotel_name',
		'hotel_name_unique',
		'star',
		'image',
		'location',
		'latitude',
		'longitude',
		'address',
		'phone',
		'fax',
		'postal',
		'email',
		'room_facilities',
		'hotel_facilities',
		'description',
		'supplier_id',
		'distances',
		'status',
		'accomodation_type'
	];
}
