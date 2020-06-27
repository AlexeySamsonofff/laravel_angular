<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 * 
 * @property int $id
 * @property int $numcode
 * @property string $iso2
 * @property string $name
 * @property string $name_caps
 * @property string $iso3
 * @property int $phone_code
 * @property string $continent
 *
 * @package App\Models
 */
class Country extends Model
{
	protected $table = 'country';
	public $timestamps = false;

	protected $casts = [
		'numcode' => 'int',
		'phone_code' => 'int'
	];

	protected $fillable = [
		'numcode',
		'iso2',
		'name',
		'name_caps',
		'iso3',
		'phone_code',
		'continent'
	];
}
