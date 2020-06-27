<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupHotelRoomAllotmentList
 * 
 * @property int $sup_hotel_room_allotment_list_id
 * @property int $supplier_id
 * @property int $sup_hotel_id
 * @property string $hotel_code
 * @property string $room_code
 * @property int $sup_room_details_id
 * @property Carbon $from_date
 * @property Carbon $to_date
 * @property int $rooms_available
 * @property int $status
 *
 * @package App\Models
 */
class SupHotelRoomAllotmentList extends Model
{
	protected $table = 'sup_hotel_room_allotment_list';
	protected $primaryKey = 'sup_hotel_room_allotment_list_id';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int',
		'sup_hotel_id' => 'int',
		'sup_room_details_id' => 'int',
		'rooms_available' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'from_date',
		'to_date'
	];

	protected $fillable = [
		'supplier_id',
		'sup_hotel_id',
		'hotel_code',
		'room_code',
		'sup_room_details_id',
		'from_date',
		'to_date',
		'rooms_available',
		'status'
	];
}
