<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SupVillaRate
 * 
 * @property int $sup_villa_rates_id
 * @property int $sup_villa_rates_list_id
 * @property int $supplier_id
 * @property int $sup_villa_id
 * @property string $villa_code
 * @property Carbon $villa_avail_date
 * @property float $villa_rate
 * @property int $villas_available
 * @property int $status
 * @property Carbon $last_updated
 *
 * @package App\Models
 */
class SupVillaRate extends Model
{
	protected $table = 'sup_villa_rates';
	protected $primaryKey = 'sup_villa_rates_id';
	public $timestamps = false;

	protected $casts = [
		'sup_villa_rates_list_id' => 'int',
		'supplier_id' => 'int',
		'sup_villa_id' => 'int',
		'villa_rate' => 'float',
		'villas_available' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'villa_avail_date',
		'last_updated'
	];

	protected $fillable = [
		'sup_villa_rates_list_id',
		'supplier_id',
		'sup_villa_id',
		'villa_code',
		'villa_avail_date',
		'villa_rate',
		'villas_available',
		'status',
		'last_updated'
	];
}
