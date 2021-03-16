<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DataInsert extends Model
{
    protected $table = 'video';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */

	protected $fillable = [
		'topic','title','status','link','file_path','authur',
	];
}
