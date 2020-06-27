<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Topdeal
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Topdeal extends Model
{
	protected $table = 'topdeals';

	protected $fillable = [
		'name',
		'description',
		'image',
		'status'
	];
}
