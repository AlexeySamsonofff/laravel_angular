<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GlobSupplierHotelPackageRateInclude
 * 
 * @property int $id
 * @property int $supplier_id
 * @property int $group_id
 * @property string $name
 * @property Carbon $last_updated
 * @property Carbon $created_date
 * @property int $status
 *
 * @package App\Models
 */
class GlobSupplierHotelPackageRateInclude extends Model
{
	protected $table = 'glob_supplier_hotel_package_rate_includes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'supplier_id' => 'int',
		'group_id' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'last_updated',
		'created_date'
	];

	protected $fillable = [
		'supplier_id',
		'group_id',
		'name',
		'last_updated',
		'created_date',
		'status'
	];
}
