<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Banner
 * 
 * @property int $id
 * @property bool $module_type
 * @property string $banner_path
 * @property bool $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class Banner extends Model
{
	protected $table = 'banners';

	protected $casts = [
		'module_type' => 'bool',
		'status' => 'bool'
	];

	protected $fillable = [
		'module_type',
		'banner_path',
		'status'
	];
}
