<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GlobSupplierMeal
 * 
 * @property int $id
 * @property int $supplier_id
 * @property string $name
 * @property Carbon $last_updated
 * @property Carbon $created_date
 * @property int $status
 *
 * @package App\Models
 */
class GlobSupplierMeal extends Model
{
	protected $table = 'glob_supplier_meals';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'supplier_id' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'last_updated',
		'created_date'
	];

	protected $fillable = [
		'supplier_id',
		'name',
		'last_updated',
		'created_date',
		'status'
	];
}
