<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AccomodationImage
 * 
 * @property int $id
 * @property int $accomodation_id
 * @property int $supplier_id
 * @property string $gallery_img
 *
 * @package App\Models
 */
class AccomodationImage extends Model
{
	protected $table = 'accomodation_images';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'accomodation_id' => 'int',
		'supplier_id' => 'int'
	];

	protected $fillable = [
		'accomodation_id',
		'supplier_id',
		'gallery_img'
	];
}
