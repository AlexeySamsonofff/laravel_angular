<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Popularcity
 * 
 * @property int $id
 * @property string $name
 * @property bool $module_type
 * @property string $code
 * @property string $country
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Popularcity extends Model
{
	protected $table = 'popularcities';

	protected $casts = [
		'module_type' => 'bool'
	];

	protected $fillable = [
		'name',
		'module_type',
		'code',
		'country',
		'status'
	];
}
