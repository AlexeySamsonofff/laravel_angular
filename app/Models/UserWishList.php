<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserWishList
 * 
 * @property int $id
 * @property string $user_no
 * @property string $hotel_code
 * @property string $api_name
 *
 * @package App\Models
 */
class UserWishList extends Model
{
	protected $table = 'user_wish_list';
	public $timestamps = false;

	protected $fillable = [
		'user_no',
		'hotel_code',
		'api_name'
	];
}
