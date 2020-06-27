<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SpecialofferType
 * 
 * @property int $id
 * @property string $type
 * @property bool $status
 * @property Carbon $updated_time
 *
 * @package App\Models
 */
class SpecialofferType extends Model
{
	protected $table = 'specialoffer_type';
	public $timestamps = false;

	protected $casts = [
		'status' => 'bool'
	];

	protected $dates = [
		'updated_time'
	];

	protected $fillable = [
		'type',
		'status',
		'updated_time'
	];
}
