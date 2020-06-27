<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClosedReasonMetadatum
 * 
 * @property int $id
 * @property string $closed_reason
 * @property string $closed_reason_type
 * @property bool $status
 *
 * @package App\Models
 */
class ClosedReasonMetadatum extends Model
{
	protected $table = 'closed_reason_metadata';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'closed_reason',
		'closed_reason_type',
		'status'
	];
}
