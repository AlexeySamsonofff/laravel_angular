<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SeasonRate
 * 
 * @property int $id
 * @property string $season_name
 * @property string $fromdate
 * @property string $todate
 * @property int $supplier_id
 * @property bool $status
 * @property Carbon $created_at
 *
 * @package App\Models
 */
class SeasonRate extends Model
{
	protected $table = 'season_rate';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'season_name',
		'fromdate',
		'todate',
		'supplier_id',
		'status'
	];
}
