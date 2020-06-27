<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupplierRoomList
 * 
 * @property int $supplier_room_list_id
 * @property int $supplier_id
 * @property int $supplier_hotel_list_id
 * @property string $hotel_code
 * @property string $amadeus_room_code
 * @property string $room_name
 * @property string $room_code
 * @property string $hotel_room_type
 * @property string $mealplan
 * @property string $room_desc
 * @property string $inclusions
 * @property string $exclusions
 * @property string $room_facilities
 * @property string $childageminlimit
 * @property string $childagemaxlimit
 * @property int $minadult
 * @property int $maxadult
 * @property int $minchild
 * @property int $maxchild
 * @property int $maxperson
 * @property int $minperson
 * @property string $room_policies
 * @property string $room_cancel_policies
 * @property Carbon $created_date
 * @property Carbon $last_updated
 * @property bool $status
 *
 * @package App\Models
 */
class SupplierRoomList extends Model
{
	protected $table = 'supplier_room_list';
	protected $primaryKey = 'supplier_room_list_id';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int',
		'supplier_hotel_list_id' => 'int',
		'minadult' => 'int',
		'maxadult' => 'int',
		'minchild' => 'int',
		'maxchild' => 'int',
		'maxperson' => 'int',
		'minperson' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'created_date',
		'last_updated'
	];

	protected $fillable = [
		'supplier_id',
		'supplier_hotel_list_id',
		'hotel_code',
		'amadeus_room_code',
		'room_name',
		'room_code',
		'hotel_room_type',
		'mealplan',
		'room_desc',
		'inclusions',
		'exclusions',
		'room_facilities',
		'childageminlimit',
		'childagemaxlimit',
		'minadult',
		'maxadult',
		'minchild',
		'maxchild',
		'maxperson',
		'minperson',
		'room_policies',
		'room_cancel_policies',
		'created_date',
		'last_updated',
		'status'
	];
}
