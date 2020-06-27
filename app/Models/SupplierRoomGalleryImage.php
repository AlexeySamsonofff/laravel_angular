<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SupplierRoomGalleryImage
 * 
 * @property int $id
 * @property int $supplier_room_list_id
 * @property int $sup_hotel_id
 * @property int $supplier_id
 * @property string $hotel_code
 * @property string $room_code
 * @property string $gallery_img
 *
 * @package App\Models
 */
class SupplierRoomGalleryImage extends Model
{
	protected $table = 'supplier_room_gallery_images';
	public $timestamps = false;

	protected $casts = [
		'supplier_room_list_id' => 'int',
		'sup_hotel_id' => 'int',
		'supplier_id' => 'int'
	];

	protected $fillable = [
		'supplier_room_list_id',
		'sup_hotel_id',
		'supplier_id',
		'hotel_code',
		'room_code',
		'gallery_img'
	];
}
