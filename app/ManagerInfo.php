<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagerInfo extends Model {

	protected $table = 'manager_info';

	protected $primaryKey = 'user_id';

	public $timestamps = false;

}
