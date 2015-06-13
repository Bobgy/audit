<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model {
	
	protected $primaryKey = 'user_id';

	public $timestamps = false;

}
