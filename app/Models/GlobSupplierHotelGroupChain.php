<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GlobSupplierHotelGroupChain
 * 
 * @property int $id
 * @property int $supplier_id
 * @property string $name
 * @property string $img_path
 * @property Carbon $last_updated
 * @property Carbon $created_date
 * @property int $status
 *
 * @package App\Models
 */
class GlobSupplierHotelGroupChain extends Model
{
	protected $table = 'glob_supplier_hotel_group_chain';
	public $timestamps = false;

	protected $casts = [
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
		'img_path',
		'last_updated',
		'created_date',
		'status'
	];
}
