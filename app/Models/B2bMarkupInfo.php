<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class B2bMarkupInfo
 * 
 * @property int $id
 * @property string $agent_no
 * @property int $service_type
 * @property string $markup_type
 * @property string $api_name
 * @property string $hotel
 * @property string $country
 * @property float $markup
 * @property int $status
 * @property string $markup_process
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class B2bMarkupInfo extends Model
{
	protected $table = 'b2b_markup_info';

	protected $casts = [
		'service_type' => 'int',
		'markup' => 'float',
		'status' => 'int'
	];

	protected $fillable = [
		'agent_no',
		'service_type',
		'markup_type',
		'api_name',
		'hotel',
		'country',
		'markup',
		'status',
		'markup_process'
	];
}
