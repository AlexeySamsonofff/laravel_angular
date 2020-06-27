<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ConfirmationPage
 * 
 * @property int $id
 * @property string $heading_1
 * @property string $sub_heading
 * @property string $click_call_text
 * @property string $chat_now_text
 * @property string $heading_2
 * @property string $heading_3
 * @property string $more_text
 *
 * @package App\Models
 */
class ConfirmationPage extends Model
{
	protected $table = 'confirmation_page';
	public $timestamps = false;

	protected $fillable = [
		'heading_1',
		'sub_heading',
		'click_call_text',
		'chat_now_text',
		'heading_2',
		'heading_3',
		'more_text'
	];
}
