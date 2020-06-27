<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VillaBlockingDate
 * 
 * @property int $id
 * @property string $villa_id
 * @property string $from_date
 * @property string $blocking_reason
 * @property int $supplier_id
 * @property bool $status
 *
 * @package App\Models
 */
class VillaBlockingDate extends Model
{
	protected $table = 'villa_blocking_dates';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'villa_id',
		'from_date',
		'blocking_reason',
		'supplier_id',
		'status'
	];
}
