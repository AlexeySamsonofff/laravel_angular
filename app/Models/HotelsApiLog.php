<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HotelsApiLog
 * 
 * @property int $log_id
 * @property string $session_id
 * @property string $api
 * @property string $uniqueRefNo
 * @property Carbon $date_time
 * @property boolean $search_request
 * @property boolean $search_response
 * @property boolean $hoteldetail_request
 * @property boolean $hoteldetail_response
 * @property boolean $getroom_request
 * @property boolean $getroom_response
 * @property boolean $roomblock_request
 * @property boolean $roomblock_response
 * @property boolean $hotelbookdetail_request
 * @property boolean $hotelbookdetail_response
 * @property boolean $hotelbooking_request
 * @property boolean $hotelbooking_response
 * @property boolean $cancellation_request
 * @property boolean $cancellation_response
 * @property boolean $final_cancellation_req
 * @property boolean $final_cancellation_res
 * @property string $AL_RefNo
 *
 * @package App\Models
 */
class HotelsApiLog extends Model
{
	protected $table = 'hotels_api_logs';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'log_id' => 'int',
		'search_request' => 'boolean',
		'search_response' => 'boolean',
		'hoteldetail_request' => 'boolean',
		'hoteldetail_response' => 'boolean',
		'getroom_request' => 'boolean',
		'getroom_response' => 'boolean',
		'roomblock_request' => 'boolean',
		'roomblock_response' => 'boolean',
		'hotelbookdetail_request' => 'boolean',
		'hotelbookdetail_response' => 'boolean',
		'hotelbooking_request' => 'boolean',
		'hotelbooking_response' => 'boolean',
		'cancellation_request' => 'boolean',
		'cancellation_response' => 'boolean',
		'final_cancellation_req' => 'boolean',
		'final_cancellation_res' => 'boolean'
	];

	protected $dates = [
		'date_time'
	];

	protected $fillable = [
		'log_id',
		'session_id',
		'api',
		'uniqueRefNo',
		'date_time',
		'search_request',
		'search_response',
		'hoteldetail_request',
		'hoteldetail_response',
		'getroom_request',
		'getroom_response',
		'roomblock_request',
		'roomblock_response',
		'hotelbookdetail_request',
		'hotelbookdetail_response',
		'hotelbooking_request',
		'hotelbooking_response',
		'cancellation_request',
		'cancellation_response',
		'final_cancellation_req',
		'final_cancellation_res',
		'AL_RefNo'
	];
}
