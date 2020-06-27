<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PaymentGateway
 * 
 * @property int $id
 * @property int $service_type
 * @property int $user_type
 * @property float $charge
 * @property int $status
 *
 * @package App\Models
 */
class PaymentGateway extends Model
{
	protected $table = 'payment_gateway';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'service_type' => 'int',
		'user_type' => 'int',
		'charge' => 'float',
		'status' => 'int'
	];

	protected $fillable = [
		'id',
		'service_type',
		'user_type',
		'charge',
		'status'
	];
}
