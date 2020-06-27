<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SpecialofferList
 * 
 * @property int $id
 * @property int $supplier_id
 * @property int $specialoffer_type
 * @property string $specialoffer_code
 * @property string $specialoffer_desc
 * @property int $specialoffer_enable
 * @property string $superseeds
 * @property bool $status
 * @property Carbon $updated_time
 *
 * @package App\Models
 */
class SpecialofferList extends Model
{
	protected $table = 'specialoffer_list';
	public $timestamps = false;

	protected $casts = [
		'supplier_id' => 'int',
		'specialoffer_type' => 'int',
		'specialoffer_enable' => 'int',
		'status' => 'bool'
	];

	protected $dates = [
		'updated_time'
	];

	protected $fillable = [
		'supplier_id',
		'specialoffer_type',
		'specialoffer_code',
		'specialoffer_desc',
		'specialoffer_enable',
		'superseeds',
		'status',
		'updated_time'
	];
}
