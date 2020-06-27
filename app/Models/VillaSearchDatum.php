<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VillaSearchDatum
 * 
 * @property int $id
 * @property string $session_id
 * @property string $uniqueRefNo
 * @property string $search_data
 * @property Carbon $date_time
 *
 * @package App\Models
 */
class VillaSearchDatum extends Model
{
	protected $table = 'villa_search_data';
	public $timestamps = false;

	protected $dates = [
		'date_time'
	];

	protected $fillable = [
		'session_id',
		'uniqueRefNo',
		'search_data',
		'date_time'
	];
}
