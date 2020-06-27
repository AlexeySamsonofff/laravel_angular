<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GlbHotelRoomType
 * 
 * @property int $id
 * @property int $supplier_id
 * @property string $room_type
 * @property Carbon $date_time
 * @property Carbon $created_date
 * @property string $status
 *
 * @package App\Models
 */
class GlbHotelRoomType extends Model
{
	protected $table = 'glb_hotel_room_type';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int'
	];

	protected $dates = [
		'date_time',
		'created_date'
	];

	protected $fillable = [
		'supplier_id',
		'room_type',
		'date_time',
		'created_date',
		'status'
	];
}
