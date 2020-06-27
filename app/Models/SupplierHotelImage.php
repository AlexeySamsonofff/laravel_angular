<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SupplierHotelImage
 * 
 * @property int $id
 * @property int $supplier_hotel_list_id
 * @property int $supplier_id
 * @property string $hotel_code
 * @property string $gallery_img
 * @property bool $img_type
 *
 * @package App\Models
 */
class SupplierHotelImage extends Model
{
	protected $table = 'supplier_hotel_images';
	public $timestamps = false;

	protected $casts = [
		'supplier_hotel_list_id' => 'int',
		'supplier_id' => 'int',
		'img_type' => 'bool'
	];

	protected $fillable = [
		'supplier_hotel_list_id',
		'supplier_id',
		'hotel_code',
		'gallery_img',
		'img_type'
	];
}
