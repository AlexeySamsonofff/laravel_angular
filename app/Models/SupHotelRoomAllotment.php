<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupHotelRoomAllotment
 * 
 * @property int $sup_hotel_room_allotment_id
 * @property int $sup_hotel_room_allotment_list_id
 * @property int $supplier_id
 * @property int $sup_hotel_id
 * @property string $hotel_code
 * @property string $room_code
 * @property int $sup_room_details_id
 * @property int $rooms_available
 * @property int $total_booking
 * @property Carbon $room_avail_date
 *
 * @package App\Models
 */
class SupHotelRoomAllotment extends Model
{
	protected $table = 'sup_hotel_room_allotment';
	protected $primaryKey = 'sup_hotel_room_allotment_id';
	public $timestamps = false;

	protected $casts = [
		'sup_hotel_room_allotment_list_id' => 'int',
		'supplier_id' => 'int',
		'sup_hotel_id' => 'int',
		'sup_room_details_id' => 'int',
		'rooms_available' => 'int',
		'total_booking' => 'int'
	];

	protected $dates = [
		'room_avail_date'
	];

	protected $fillable = [
		'sup_hotel_room_allotment_list_id',
		'supplier_id',
		'sup_hotel_id',
		'hotel_code',
		'room_code',
		'sup_room_details_id',
		'rooms_available',
		'total_booking',
		'room_avail_date'
	];
}
