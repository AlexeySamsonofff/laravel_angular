<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Currency
 * 
 * @property int $currency_id
 * @property string $currency_name
 * @property string $currency_code
 * @property float $value
 * @property int $status
 * @property Carbon $updated_datetime
 *
 * @package App\Models
 */
class Currency extends Model
{
	protected $table = 'currency';
	protected $primaryKey = 'currency_id';
	public $timestamps = false;

	protected $casts = [
		'value' => 'float',
		'status' => 'int'
	];

	protected $dates = [
		'updated_datetime'
	];

	protected $fillable = [
		'currency_name',
		'currency_code',
		'value',
		'status',
		'updated_datetime'
	];
}
