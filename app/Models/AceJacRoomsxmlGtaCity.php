<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AceJacRoomsxmlGtaCity
 * 
 * @property int $id
 * @property string $country_name
 * @property string $city_name
 * @property string $ace_city_id
 * @property string $ace_country_id
 * @property string $rooms_city_id
 * @property string $rooms_country_id
 * @property string $region_jac
 * @property string $gta_city_code
 * @property string $gta_country_code
 * @property string $at_city_code
 * @property string $at_country_code
 * @property string $tg_city_name
 * @property string $hp_city_id
 * @property string $dotw_city_id
 * @property string $ez_city_name
 * @property string $ez_country_name
 * @property string $hb_city_code
 * @property string $tbo_city_id
 * @property string $tbo_country_code
 * @property int $status
 *
 * @package App\Models
 */
class AceJacRoomsxmlGtaCity extends Model
{
	protected $table = 'ace_jac_roomsxml_gta_city';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'id',
		'country_name',
		'city_name',
		'ace_city_id',
		'ace_country_id',
		'rooms_city_id',
		'rooms_country_id',
		'region_jac',
		'gta_city_code',
		'gta_country_code',
		'at_city_code',
		'at_country_code',
		'tg_city_name',
		'hp_city_id',
		'dotw_city_id',
		'ez_city_name',
		'ez_country_name',
		'hb_city_code',
		'tbo_city_id',
		'tbo_country_code',
		'status'
	];
}
