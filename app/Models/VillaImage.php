<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VillaImage
 * 
 * @property int $id
 * @property int $villa_id
 * @property int $supplier_id
 * @property string $property_code
 * @property string $gallery_img
 * @property bool $img_type
 *
 * @package App\Models
 */
class VillaImage extends Model
{
	protected $table = 'villa_images';
	public $timestamps = false;

	protected $casts = [
		'villa_id' => 'int',
		'supplier_id' => 'int',
		'img_type' => 'bool'
	];

	protected $fillable = [
		'villa_id',
		'supplier_id',
		'property_code',
		'gallery_img',
		'img_type'
	];
}
