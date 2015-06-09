<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagerInfo extends Model {

	protected $table = 'manager_info';

	protected $fillable = ['real_name', 'password'];

	protected $hidden = ['password'];
	
}
