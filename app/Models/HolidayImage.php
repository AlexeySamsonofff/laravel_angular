<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HolidayImage
 * 
 * @property int $holi_image_id
 * @property int $holiday_list_id
 * @property string $holiday_images
 * @property int $img_type
 * @property int $supplier_id
 *
 * @package App\Models
 */
class HolidayImage extends Model
{
	protected $table = 'holiday_images';
	protected $primaryKey = 'holi_image_id';
	public $timestamps = false;

	protected $casts = [
		'holiday_list_id' => 'int',
		'img_type' => 'int',
		'supplier_id' => 'int'
	];

	protected $fillable = [
		'holiday_list_id',
		'holiday_images',
		'img_type',
		'supplier_id'
	];
}
