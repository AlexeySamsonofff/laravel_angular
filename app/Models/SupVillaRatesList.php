<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupVillaRatesList
 * 
 * @property int $sup_villa_rates_list_id
 * @property int $supplier_id
 * @property int $sup_villa_id
 * @property string $villa_code
 * @property Carbon $from_date
 * @property Carbon $to_date
 * @property string $cancellation_policy
 * @property float $villa_rate
 * @property int $status
 * @property Carbon $last_updated
 * @property bool $is_deleted
 *
 * @package App\Models
 */
class SupVillaRatesList extends Model
{
	protected $table = 'sup_villa_rates_list';
	protected $primaryKey = 'sup_villa_rates_list_id';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int',
		'sup_villa_id' => 'int',
		'villa_rate' => 'float',
		'status' => 'int',
		'is_deleted' => 'bool'
	];

	protected $dates = [
		'from_date',
		'to_date',
		'last_updated'
	];

	protected $fillable = [
		'supplier_id',
		'sup_villa_id',
		'villa_code',
		'from_date',
		'to_date',
		'cancellation_policy',
		'villa_rate',
		'status',
		'last_updated',
		'is_deleted'
	];
}
