<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Popularcityhotel
 * 
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $country
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Popularcityhotel extends Model
{
	protected $table = 'popularcityhotel';

	protected $fillable = [
		'name',
		'code',
		'country',
		'status'
	];
}
