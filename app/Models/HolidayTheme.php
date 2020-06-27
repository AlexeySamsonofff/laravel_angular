<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HolidayTheme
 * 
 * @property int $theme_id
 * @property string $theme_name
 * @property string $theme_desc
 * @property int $price
 * @property string $theme_img
 * @property string $home_category_image
 * @property string $category_image
 * @property bool $status
 *
 * @package App\Models
 */
class HolidayTheme extends Model
{
	protected $table = 'holiday_theme';
	protected $primaryKey = 'theme_id';
	public $timestamps = false;

	protected $casts = [
		'price' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'theme_name',
		'theme_desc',
		'price',
		'theme_img',
		'home_category_image',
		'category_image',
		'status'
	];
}
