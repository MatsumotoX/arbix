<?php

namespace App\Model\Lines\Bots;

use Illuminate\Database\Eloquent\Model;

class LB_RichMenu extends Model
{
	protected $table = 'lines_bots_rich_menus';

	protected $fillable = [
		'richMenuId',
		'name',
		'language',
		'size',
		'area_id',
		'chatBarText',
		'selected',
	];
}
