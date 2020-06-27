<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Subscription
 * 
 * @property int $id
 * @property string $module_type
 * @property string $top_text
 * @property string $bottom_text
 * @property bool $status
 * @property Carbon $updated_at
 * @property Carbon $created_at
 *
 * @package App\Models
 */
class Subscription extends Model
{
	protected $table = 'subscription';

	protected $casts = [
		'status' => 'bool'
	];

	protected $fillable = [
		'module_type',
		'top_text',
		'bottom_text',
		'status'
	];
}
