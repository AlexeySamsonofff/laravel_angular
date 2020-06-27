<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EmailSubscriber
 * 
 * @property int $id
 * @property string $email
 * @property bool $status
 * @property Carbon $created_at
 *
 * @package App\Models
 */
class EmailSubscriber extends Model
{
	protected $table = 'email_subscribers';
	public $timestamps = false;

	protected $casts = [
		'status' => 'bool'
	];

	protected $fillable = [
		'email',
		'status'
	];
}
