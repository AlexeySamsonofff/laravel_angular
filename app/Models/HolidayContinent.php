<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HolidayContinent
 * 
 * @property int $continent_id
 * @property string $continent_name
 * @property string $inspiration_img_path
 * @property string $inspiration_header_text
 * @property string $inspiration_text
 * @property string $promotional_name
 * @property bool $active_inspiration
 * @property bool $isActive
 *
 * @package App\Models
 */
class HolidayContinent extends Model
{
	protected $table = 'holiday_continent';
	protected $primaryKey = 'continent_id';
	public $timestamps = false;

	protected $casts = [
		'active_inspiration' => 'bool',
		'isActive' => 'bool'
	];

	protected $fillable = [
		'continent_name',
		'inspiration_img_path',
		'inspiration_header_text',
		'inspiration_text',
		'promotional_name',
		'active_inspiration',
		'isActive'
	];
}
