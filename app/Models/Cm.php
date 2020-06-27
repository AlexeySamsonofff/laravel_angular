<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cm
 * 
 * @property int $id
 * @property string $type
 * @property string $name
 * @property string $content
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Cm extends Model
{
	protected $table = 'cms';

	protected $fillable = [
		'type',
		'name',
		'content',
		'status'
	];
}
