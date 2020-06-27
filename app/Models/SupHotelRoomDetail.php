<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupHotelRoomDetail
 * 
 * @property int $sup_room_details_id
 * @property int $supplier_id
 * @property int $sup_hotel_id
 * @property string $hotel_code
 * @property int $room_type_id
 * @property string $room_code
 * @property string $room_name
 * @property string $room_desc
 * @property int $occupancy
 * @property int $no_of_adults
 * @property int $no_of_childs
 * @property int $total_no_of_rooms
 * @property string $room_critical_level
 * @property int $no_of_rooms_left
 * @property string $room_policies
 * @property string $room_image
 * @property string $room_facilities
 * @property int $status
 * @property Carbon $created_date
 * @property Carbon $update_date_time
 *
 * @package App\Models
 */
class SupHotelRoomDetail extends Model
{
	protected $table = 'sup_hotel_room_details';
	protected $primaryKey = 'sup_room_details_id';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int',
		'sup_hotel_id' => 'int',
		'room_type_id' => 'int',
		'occupancy' => 'int',
		'no_of_adults' => 'int',
		'no_of_childs' => 'int',
		'total_no_of_rooms' => 'int',
		'no_of_rooms_left' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'created_date',
		'update_date_time'
	];

	protected $fillable = [
		'supplier_id',
		'sup_hotel_id',
		'hotel_code',
		'room_type_id',
		'room_code',
		'room_name',
		'room_desc',
		'occupancy',
		'no_of_adults',
		'no_of_childs',
		'total_no_of_rooms',
		'room_critical_level',
		'no_of_rooms_left',
		'room_policies',
		'room_image',
		'room_facilities',
		'status',
		'created_date',
		'update_date_time'
	];
}
